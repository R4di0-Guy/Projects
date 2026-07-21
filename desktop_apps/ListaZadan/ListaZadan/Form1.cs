using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ListaZadan
{
    public partial class Form1 : Form
    {
        int edit_mode = 0;
        public Form1()
        {
            InitializeComponent();
        }

        private void btnDodaj_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrWhiteSpace(textBox1.Text))
            {
                MessageBox.Show("Nie możesz dodać pustego produktu!");
                return;
            }
            if (edit_mode != 1) { 
            listBox1.Items.Add(textBox1.Text);
            textBox1.Clear();}
            else
            {

                listBox1.Items.Insert(listBox1.SelectedIndex, textBox1.Text);
                listBox1.Items.RemoveAt(listBox1.SelectedIndex);
                btnDodaj.Text = "Dodaj";
                textBox1.Clear();
                edit_mode = 0;
            }

        }

        private void btnUsun_Click(object sender, EventArgs e)
        {
            if (listBox1.SelectedIndex >= 0)
            {
                listBox1.Items.RemoveAt(listBox1.SelectedIndex);
            }
            else
            {
                MessageBox.Show("Najpierw wybierz produkt do usunięcia!");
            }

        }

        private void btnEdytuj_Click(object sender, EventArgs e)
        {
            if (listBox1.SelectedIndex >= 0)
            {
                textBox1.Text=listBox1.SelectedItem.ToString();
                btnDodaj.Text = "Zmien";
                edit_mode = 1;
            }
            else
            {
                MessageBox.Show("Najpierw wybierz produkt do edytowania!");
            }
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (listBox1.SelectedIndex >= 0)
            {
                string tekst = listBox1.SelectedItem.ToString();

                if (!tekst.StartsWith("[✔]"))
                {
                    listBox1.Items[listBox1.SelectedIndex] = "[✔] " + tekst;
                }
            }
            else
            {
                MessageBox.Show("Nie możesz zaznaczyc kupionym pustego produktu!");
                return;
            }
        }
    }
}
