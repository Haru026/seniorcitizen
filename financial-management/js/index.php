<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--css-->
    <link rel="stylesheet" href="./css/style.css" />
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400&display=swap"
      rel="stylesheet"
    />
    <title>Financial Management</title>
  </head>
  <body>
    <header>
      <img src="./assets/logo.svg" alt="Logo do site Dev Finance" />
    </header>

    <main class="container">
      <section id="balance">
        <h2 class="sr-only">Balanço</h2>

        <div class="card">
          <h3>
            <span>Input</span>
            <img src="./assets/income.svg" alt="Imagem de Input" />
          </h3>
          <p id="incomeDisplay">₱ 0,00</p>
        </div>

        <div class="card">
          <h3>
            <span>Output</span>
            <img src="./assets/expense.svg" alt="Imagem de Output" />
          </h3>
          <p id="expenseDisplay">₱ 0,00</p>
        </div>

        <div class="card total">
          <h3>
            <span>Total</span>
            <img src="./assets/total.svg" alt="Imagem de total" />
          </h3>
          <p id="totalDisplay">₱ 0,00</p>
        </div>
      </section>

      <section id="transaction">
        <h2 class="sr-only">Transações</h2>

        <a href="#" onclick="Modal.open()" class="button new"
          >+ New Transaction</a
        >

        <table id="data-table">
          <thead>
            <tr>
              <th>Description</th>
              <th>Value</th>
              <th>Data</th>
              <th></th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </section>
    </main>

    <div class="modal-overlay">
      <div class="modal">
        <div id="form">
          <h2>New Transaction</h2>
          <form action="" onsubmit="Form.submit(event)">
            <div class="input-group">
              <label class="sr-only" for="description">Description</label>
              <input
                type="text"
                id="description"
                name="description"
                placeholder="Description"
              />
            </div>

            <div class="input-group">
              <label class="sr-only" for="amount">Value</label>
              <input
                type="number"
                step="0.01"
                id="amount"
                name="amount"
                placeholder="0,00"
              />
              <small class="help"
                >Use o sinal - (negativo) para despesas e , (vírgula) para casas
                decimais</small
              >
            </div>

            <div class="input-group">
              <label class="sr-only" for="date">Data</label>
              <input type="date" id="date" name="date" />
            </div>

            <div class="input-group actions">
              <a href="#" onclick="Modal.close()" class="button cancel"
                >Cancelar</a
              >
              <button>Salvar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <footer>Financial Management</footer>

    <script src="./js/js.js"></script>
  </body>
</html>