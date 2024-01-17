import java.io.*;
import java.net.*;

/**
 * EchoClient
 */
public class EchoClient {

    public static void main(String[] args) throws UnknownHostException, IOException {
        System.out.println("Echo Client");

        Socket socket = new Socket("localhost", 8080);

        BufferedReader stdIn = new BufferedReader(
                new InputStreamReader(
                        System.in));

        String input;
        while ((input = stdIn.readLine()) != null) {
            if (input.equals("bye")) {
                break;
            }

            input = stdIn.readLine();
            if (input != null) {
                System.out.println(input);
            }
        }
        socket.close();

    }
}
