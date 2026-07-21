using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Globalization;
using System.Linq;
using System.Reflection;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Markup;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace WpfApp26._03._26
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    class Rezerwacja
    {
        public string Sala { get; set; }
        public string Osoba { get; set; }
        public string Data { get; set; }
        public string GodzinaOd { get; set; }
        public string GodzinaDo { get; set; }
        public Rezerwacja(string sala, string osoba, string data, string godzinaod, string godzinado)
        {
            Sala=sala;
            Osoba=osoba;
            Data=data;
            GodzinaOd = godzinaod;
            GodzinaDo = godzinado;
        }
        public override string ToString()
        {
            return String.Format("{0} {1} {2} {3} {4}", Sala, Osoba, Data, GodzinaOd, GodzinaDo);
        }
    }

    public partial class MainWindow : Window
    {
        internal ObservableCollection<Rezerwacja> Zarezerwowano = null;
        public MainWindow()
        {
            InitializeComponent();
            PrzygotujWiazanie();

        }
        int iloscRezerwacji = 1;
        private void PrzygotujWiazanie()
        {
            Zarezerwowano = new ObservableCollection<Rezerwacja>();
            Zarezerwowano.Add(new Rezerwacja("201", "Ktoś", DateTime.Now.ToString("d"), "15:00", "17:00"));
            rezerw.ItemsSource = Zarezerwowano;
            CollectionView widok = (CollectionView)CollectionViewSource.GetDefaultView(rezerw.ItemsSource);
            widok.Filter = FiltrUzytkownika;

        }
        bool filterValue=false;
        private bool FiltrUzytkownika(object item)
        {
            if (String.IsNullOrEmpty(filtr.Text))
                return true;
            else
            {
                if (filterValue)
                {
                    return ((item as Rezerwacja).Sala.IndexOf(filtr.Text,
                    StringComparison.OrdinalIgnoreCase) >= 0);
                }
                else
                {
                    return ((item as Rezerwacja).Data.IndexOf(filtr.Text,
                    StringComparison.OrdinalIgnoreCase) >= 0);
                }
            }
                
        }
        private void Filter_on(object sender, System.Windows.Controls.TextChangedEventArgs e)
        {
            CollectionViewSource.GetDefaultView(rezerw.ItemsSource).Refresh();
        }
        private void Button_Click(object sender, RoutedEventArgs e)
        {
            string sala = "";
            try
            {
                string[] sali = {"101","102","201"};
                sala =sali[nsala.SelectedIndex];
            }
            catch
            {

            }
            string osoba=nosoba.Text.Trim();
            string data = "";
            try {
                data = ((DateTime)ndata.SelectedDate).ToString("d");    
            }
            catch
            {
                
            }
            string godzina_od =ngodzina_od.Text;
            string godzina_do =ngodzina_do.Text;
            if (sala != "" && osoba != "" && data != "" && godzina_od != "" && godzina_do != "")
            {
                bool isUnique = true;
                bool isWrongDate = false;
                try
                {
                    CultureInfo provider = CultureInfo.InvariantCulture;
                    DateTime nowaOd = DateTime.ParseExact(data + " " + godzina_od, "g", provider);
                    DateTime nowaDo = DateTime.ParseExact(data + " " + godzina_do, "g", provider);
                    foreach (Rezerwacja item in rezerw.Items)
                    {
                        var values = new List<string>
                        {
                            item.GodzinaDo,
                            item.GodzinaOd,
                            item.Sala,
                            item.Data
                        };
                        DateTime istniejacaDo = DateTime.ParseExact(values[3] + " " + values[0], "g", provider);
                        DateTime istniejacaOd = DateTime.ParseExact(values[3] + " " + values[1], "g", provider);
                        if (sala == values[2] && nowaOd < istniejacaDo && nowaDo > istniejacaOd)
                        {
                            isUnique = false;
                        }
                    }
                }
                catch {
                    isUnique = false;
                    isWrongDate = true;
                }

                if (isUnique)
                {
                    Zarezerwowano.Add(new Rezerwacja(sala, osoba, data, godzina_od, godzina_do));
                }
                else
                {
                    if (isWrongDate)
                    {
                        MessageBox.Show("Czas jest wprowadzony nie prawidlowo", "Bląd", MessageBoxButton.OK);
                    }
                    else
                    {
                        MessageBox.Show("Ta sala juz jest zarezerwowana w ten czas", "Bląd", MessageBoxButton.OK);
                    }
                    
                }

                
            }
            else
            {
                MessageBox.Show("Nie wprowadzileś wszystkie danne" ,"Bląd", MessageBoxButton.OK);
            }


        }

        private void usun_Click(object sender, RoutedEventArgs e)
        {
            Rezerwacja wybranaRezerw = rezerw.SelectedItem as Rezerwacja;
            MessageBoxResult odpowiedz = MessageBox.Show("Czy wykasować rezerwację: " +wybranaRezerw.ToString() + "?", "Pytanie", MessageBoxButton.YesNo,MessageBoxImage.Question);
            if (odpowiedz == MessageBoxResult.Yes)
            {
                Zarezerwowano.Remove(wybranaRezerw);
            }
        }

        private void ComboBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            if(filterValue)
            {
                filterValue = false;
            }
            else
            {
                filterValue = true;
            }
        }
    }
}
