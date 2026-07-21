using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        private void listBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void buttonDodaj_Click(object sender, EventArgs e)
        {
            if (string.IsNullOrWhiteSpace(textBox1.Text))
            {
                MessageBox.Show("Nie możesz dodać pustego zadania!");
                return;
            }

            listBox1.Items.Add(textBox1.Text);
            textBox1.Clear();

        }

        private void buttonUsun_Click(object sender, EventArgs e)
        {
            if (listBox1.SelectedIndex >= 0)
            {
                listBox1.Items.RemoveAt(listBox1.SelectedIndex);
            }
            else
            {
                MessageBox.Show("Najpierw wybierz zadanie do usunięcia!");
            }

        }

        private void buttonEdytuj_Click(object sender, EventArgs e)
        {

        }
    }
}
