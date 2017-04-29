package mz.com.mybd;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class JDBCExemplo {

	/**
	 * @param args
	 * @throws SQLException 
	 */
	public static void main(String[] args) throws SQLException {
		// TODO Auto-generated method stub
		Connection conexao = DriverManager.getConnection("jdbc:mysql://localhost/easy_drinks", "root", "");
		System.out.println("connection closed");
		conexao.close();
		
	}

}
