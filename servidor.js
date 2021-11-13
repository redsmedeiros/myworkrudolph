//criar uma constante http
const http = require('http');
//chamar a função que cria o servidor, passando as variaveis de requisao e resposta com arrow function
http.createServer((requisicao, resposta)=>{
    //escrever no cabeçalho o status da chamada 200 = ok
    resposta.writeHead(200, {'Content-type':'text/plain'});
    //resposta que será escrita
    resposta.write('Servidor\n');
    //indicar o final da resposta
    resposta.end();


}).listen(1337); //função que vai escutar a porta indicada