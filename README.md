# streamed-response-demo

## Demo code

This app is a basic Symfony app created with the `symfony` CLI tool.

The demo code lies in the controller actions; see [src/Controller/StreamedResponseDemoController.php](./src/Controller/StreamedResponseDemoController.php).

## Quick start

```bash
./start-server.bash
```

Then the demo endpoints are available at:

- http://localhost:3000/do
- http://localhost:3000/dont

## Request with telnet

Start a telnet session with:

```bash
telnet localhost 3000
```

Then send a request with:

```http
GET /do HTTP/1.0


```
