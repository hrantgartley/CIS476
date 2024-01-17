import java.io.IOException;
import java.io.PrintWriter;
import java.net.ServerSocket;
import java.net.Socket;

/**
 * EchoServer
 */
public class EchoServer {

    public static void main(String[] args) {
        try {
            ServerSocket serverSocket = new ServerSocket(8080);
            Socket cs = serverSocket.accept();
            PrintWriter out = new PrintWriter(cs.getOutputStream());
            out.println("Connection Made");
            serverSocket.close();
            System.out.println("Connection Accepted");
        } catch (IOException e) {
            // TODO: Auto-generated catch block
            e.printStackTrace();
            System.out.println("sum bad happened big dawg");
        }
    }
}
