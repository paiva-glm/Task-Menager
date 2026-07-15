# 📝 Gerenciador de Tarefas

> Um sistema CRUD completo e intuitivo desenvolvido em PHP com Laravel para organizar sua rotina, permitindo o cadastro, visualização, edição conclusão e exclusão de tarefas diárias.

---

## 🚀 Funcionalidades

O projeto conta com todas as operações essenciais de um CRUD, estruturadas com uma interface moderna para oferecer uma excelente usabilidade:

* **➕ Criar Tarefa:** Cadastrar novas tarefas definindo:
    * **Descrição/Título:** O que precisa ser feito.
    * **Horário/Data:** Quando a atividade deve ser realizada.
    * **Local:** Onde a atividade vai acontecer.
* **👁️ Visualizar Tarefas:** Listagem clara e organizada de todos os compromissos agendados.
* **✅ Concluir Tarefa:** Marque tarefas como concluídas com um clique para manter o foco no que ainda resta fazer.
* **✏️ Editar Tarefa:** Atualize qualquer informação (horário, local ou descrição) caso seus planos mudem.
* **❌ Excluir Tarefa:** Remova permanentemente tarefas da sua lista.

---

## 🛠️ Tecnologias Utilizadas

* **Backend:** [Laravel]
* **Banco de Dados:** [MySQL]
* **Frontend:** HTML5 & [Tailwind CSS]

---

## 📦 Como Executar o Projeto

Siga os passos abaixo para rodar a aplicação localmente:

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina:
* [Git](https://git-scm.com)
* [PHP](https://www.php.net/) (8.4.14)
* [Composer](https://getcomposer.org/)
* [Node.js & NPM](https://nodejs.org/)
* Servidor MySQL

### Passo a Passo

```bash
    composer install
    npm install
    php artisan migrate
    npm run dev
    php artisan serve
```

### endpoints

* / |serve para criar tarefas
* /lista |serve para listar as tarefas do banco de dados
* /deletar/{id} |serve para deletar a tarefa selecionada por id (deve ser passado o id na url)
* /deletar/nome/{nome da tarefa} |serve para deletar a tarefa pelo nome (deve ser passado o nome pela url)
* /editar/{id} |serve para atualizar a tarefa(o id deve ser passado na url)
* /status/{id} |serve para trocar o status de concluido da tarefa(id deve ser passado na url)