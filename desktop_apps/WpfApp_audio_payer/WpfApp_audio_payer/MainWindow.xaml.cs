using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using Microsoft.Win32;
using System.Windows.Threading;
using System.Windows.Controls.Primitives;



namespace WpfApp_audio_payer
{
    /// <summary>
    /// Logika interakcji dla klasy MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        private MediaPlayer mediaPlayer = new MediaPlayer();
        private DispatcherTimer timer;
        private bool czySuwakJestPrzesuwany = false;
        public MainWindow()
        {
            InitializeComponent();
            timer = new DispatcherTimer();
            timer.Interval = TimeSpan.FromMilliseconds(500);
            timer.Tick += new EventHandler(timerTick);

        }
        void timerTick(object sender, EventArgs e)
        {
            if (mediaPlayer.Source != null && mediaPlayer.NaturalDuration.HasTimeSpan && !czySuwakJestPrzesuwany)
            {
                txtCzas.Text = mediaPlayer.Position.ToString(@"mm\:ss");
                TimeSpan ts = mediaPlayer.NaturalDuration.TimeSpan; pbGra.Maximum = 100;
                pbGra.Maximum = 100;
                pbGra.Value = ((double)mediaPlayer.Position.TotalMilliseconds / ts.TotalMilliseconds) * 100;
                slGra.Maximum = mediaPlayer.NaturalDuration.TimeSpan.TotalMilliseconds;
                slGra.Value = mediaPlayer.Position.TotalMilliseconds;
            }
            DispatcherTimer timer = new DispatcherTimer();
            timer.Interval = TimeSpan.FromMilliseconds(500);
            timer.Tick += new EventHandler(timerTick);
            timer.Start();
        }
        private void slGra_DragStarted(object sender, DragStartedEventArgs e)
        {
            czySuwakJestPrzesuwany = true;
        }
        private void slGra_DragCompleted(object sender, DragCompletedEventArgs e)
        {
            czySuwakJestPrzesuwany = false;
            mediaPlayer.Position = TimeSpan.FromMilliseconds(slGra.Value);
        }

        private void btnWybierzClick(object sender, RoutedEventArgs e)
        {
            OpenFileDialog dialog = new OpenFileDialog();
            dialog.Filter = "MP3 files(*.mp3)|*.mp3|All files (*.*)|*.*";
            if (dialog.ShowDialog() == true)
            {
                mediaPlayer.Open(new Uri(dialog.FileName));
                txtUtwor.Text = String.Format("Utwór: {0}", dialog.FileName); btnPlay.IsEnabled = true;
                btnPlay.IsEnabled = true;
                btnPause.IsEnabled = true;
                btnStop.IsEnabled = true;
                timer.Start();
            }
        }

        private void btnPlay_Click(object sender, RoutedEventArgs e)
        {
            mediaPlayer.Play();
        }

        private void btnPause_Click(object sender, RoutedEventArgs e)
        {
            mediaPlayer.Pause();
        }

        private void btnStop_Click(object sender, RoutedEventArgs e)
        {
            mediaPlayer.Stop();
        }
        private void radio_Cheked(object sender, RoutedEventArgs e)
        {
            var radio = sender as RadioButton;
            string kolor = (radio.Content.ToString() == "Blue") ? "LightSkyBlue" : "LightGreen";
            pbGra.Foreground = (SolidColorBrush)new BrushConverter().ConvertFromString(kolor);
        }

        private void btnWybierzPlikiClick(object sender, RoutedEventArgs e)
        {
            OpenFileDialog dialog = new OpenFileDialog();
            dialog.Filter = "All files (*.*)|*.*";
            if (dialog.ShowDialog() == true)
            {
                mediaPlayer.Open(new Uri(dialog.FileName));
                txtUtwor.Text = String.Format("Utwór: {0}", dialog.FileName); btnPlay.IsEnabled = true;
                btnPlay.IsEnabled = true;
                btnPause.IsEnabled = true;
                btnStop.IsEnabled = true;
                timer.Start();
            }
        }
    }
}


