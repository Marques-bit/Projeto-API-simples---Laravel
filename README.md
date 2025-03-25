# Projeto Laravel com Docker

## Acesso ao phpMyAdmin

Com o Docker rodando, é possível acessar o phpMyAdmin pelo link:

- [http://localhost:8075](http://localhost:8075)

**Usuário:** `root`  
**Senha:** `root`

## Acesso ao Backend

A URL base para acessar o backend é:

- [http://localhost:8005/api](http://localhost:8005/api)

## Instruções de Uso

### Subir o Container

Para iniciar o container, execute o comando:

```bash
docker compose up --build -d
```

### Configuração Inicial

1. **Criar o arquivo `.env`:**  
   Copie o conteúdo do arquivo `.env.example` para um novo arquivo `.env` dentro da pasta `/src`.

2. **Abrir o terminal dentro do Docker:**  
   Execute o comando abaixo para acessar o terminal do container:
   
   ```bash
   docker compose exec --user 1000:1000 php sh
   ```
   
3. **Instalar as dependências:**  
   Dentro do terminal do Docker, digite o seguinte comando para instalar as dependências:
   
   ```bash
   composer update
   ```

4. **Gerar a chave da aplicação:**  
   Ainda dentro do terminal do Docker, execute:
   
   ```bash
   php artisan key:generate
   ```

5. **Rodar as migrações:**  
   No mesmo terminal, execute:
   
   ```bash
   php artisan migrate
   ```

## Observações Importantes

- Sempre execute os comandos do Docker na mesma pasta onde está localizado o arquivo `docker-compose.yml` (pasta raiz).
- Para executar comandos do Laravel é necessário acessar o terminal do container. Para isso, execute o comando:
  
  ```bash
  docker compose exec --user 1000:1000 php sh
  ```

## Dicas para Usuários Windows

- Não use no Windows, php não gosta de Windows.
- Se for utilizar, recomendo o uso do [Laragon](https://laragon.org/). Nos quatro primeiros vídeos desta [playlist](https://www.youtube.com/playlist?list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb) há um tutorial de como configurá-lo. Existem também outras opções, como o [Windows Subsystem for Linux](https://docs.microsoft.com/en-us/windows/wsl/install-win10), porém o WSL tem um certo delay.

---
