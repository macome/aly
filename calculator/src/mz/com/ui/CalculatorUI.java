package mz.com.ui;

import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;
import javax.swing.border.EmptyBorder;

import net.miginfocom.swing.MigLayout;

public class CalculatorUI extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField textField;

	
	public static void main(String[] args) {
	
		try {
			//UIManager.setLookAndFeel(UIManager.getSystemLookAndFeelClassName());
		}catch(Exception e){
			
		}
		
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					CalculatorUI frame = new CalculatorUI();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public CalculatorUI() {
		setTitle("Calculator - by Estanislau");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		contentPane.setLayout(new BorderLayout(0, 0));
		setContentPane(contentPane);
		
		JPanel panel = new JPanel();
		contentPane.add(panel, BorderLayout.CENTER);
		panel.setLayout(new MigLayout("", "[grow]", "[grow]"));
		
		JScrollPane scrollPane = new JScrollPane();
		panel.add(scrollPane, "cell 0 0,grow");
		
		final JTextArea textArea = new JTextArea();
		textArea.setText("well come to calculate!");
		textArea.setEditable(false);
		textArea.setForeground(Color.DARK_GRAY);
		textArea.setFont(new Font("DejaVu Sans", Font.BOLD, 14));
		scrollPane.setViewportView(textArea);
		
		JPanel panel_1 = new JPanel();
		contentPane.add(panel_1, BorderLayout.NORTH);
		panel_1.setLayout(new MigLayout("", "[][grow]", "[]"));
		
		JLabel lblNewLabel = new JLabel("Valor:");
		panel_1.add(lblNewLabel, "cell 0 0,alignx trailing");
		
		textField = new JTextField();
		textField.setToolTipText("Digite apenas números se não quiser problemas");
		panel_1.add(textField, "cell 1 0,growx");
		textField.setColumns(10);
		
		JPanel panel_2 = new JPanel();
		contentPane.add(panel_2, BorderLayout.SOUTH);
		
		JButton btnNewButton_1 = new JButton("Calcular");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				int internet = 50;
				if(textField.getText().length() == 0 || textField.getText().trim().equals("")) {
					textArea.setText("Por favor!\n" + "Preencha o Campo Valor Com um numero! ");
					return;
				}
				double valor = Double.parseDouble(textField.getText());
				if(valor > internet) {
					double total = valor;
					double temp = valor - internet;
					valor = temp / 3;
					int v = (int) valor;
					textArea.setText("Dua: " + v + "Mt\n\n");
					textArea.append("Lalau: " + v + "Mt\n\n");
					textArea.append("Vitó: " + v + "Mt\n\n");
					textArea.append("================================\n");
					textArea.append("Internet Diario: " + internet + "Mt\n");
					textArea.append("TOTAL: " + total + "0Mt\n");
					textArea.append("================================");
					textArea.append("\n\nCalculo efectuado com sucesso!");
					textField.setText("");
				} else {
					textArea.setText("Erro!\n" + "Não há mola hoje ném?");
				}
				
			}
		});
		panel_2.add(btnNewButton_1);
		
		JButton btnNewButton = new JButton("Sair");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				System.exit(0);
			}
		});
		panel_2.add(btnNewButton);
	}

}
