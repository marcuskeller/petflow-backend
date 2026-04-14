## Pet Flow

Bem-vindo ao projeto do Pet Flow, um projeto backend focado em modernização e integração das mais diversas, a seguir ficara alguns dos codigos mais utilizados neste projeto:

## Inicializar aplicação
Para inicizalizarmos a aplicação basta inserir este codigo no terminal:
```bash
php artisan serve
```

## Docker Compose

Passos para subir o docker na sua máquina local:
- 1 - Abra o terminal do projeto ou se estiver utilizando a IDE do phpStorm precione **Alt + F12**.
- 2 - Esteja no diretório raiz do projeto `..\petflow-backend>`.
- 3 - Por ultimo insira o seguinte comando:

```bash
docker-compose up -d
```

Para finalizar o processo do container:

```bash
docker-compose down
```

## Criação de novas migrations

Para criar um novo arquivo de migration. O Laravel usa o nome para adivinhar a tabela; ao nomeá-la, create_xxx_table o arquivo será preenchido automaticamente com o método Schema::create. 

```bash
php artisan make:migration create_flights_table
```

## Executar as migrations

Para executar as migrations insira este comando no seu terminal:

```bash
php artisan migrate
```
