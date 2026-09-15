#  Verificador de Maioridade — PHP Backend

Este projeto é um exercício prático desenvolvido para a matéria de **Backend**, com o objetivo de praticar manipulação de formulários, validação de regras de negócio simples e escrita em arquivos com **PHP**.

## 📌 Sobre o Projeto

O aplicativo consiste em um formulário web onde o usuário insere seu **Nome** e **Ano de Nascimento**. Com base nessas informações, o script PHP:

1. Calcula a idade atual do usuário de forma dinâmica.

2. Verifica se o usuário é maior de idade ($\ge 18$ anos).

3. **Acesso Permitido (**$\ge 18$**):** Exibe um alerta de sucesso e registra o nome e o ano de nascimento no arquivo `log_acessos.txt`.

4. **Acesso Negado (**$< 18$**):** Exibe um alerta informando a restrição de acesso.

## 🚀 Funcionalidades

* \[x\] Formulário HTML para entrada de dados (`POST`).

* \[x\] Cálculo automático de idade utilizando o ano atual (`date("Y")`).

* \[x\] Validação de maioridade (18+ anos).

* \[x\] Manipulação de arquivos TXT em PHP (`fopen`, `fwrite`, `fclose`) no modo *append* (`a`).

* \[x\] Feedback visual ao usuário via alertas nativos (`alert()`).

## 📁 Estrutura do Repositório

```
.
├── index.php          # Script principal (Formulário HTML + Lógica PHP)
├── log_acessos.txt    # Arquivo onde os acessos permitidos são salvos
└── 5a_desafio1.md     # Enunciado e requisitos do desafio

```

## 🛠️ Tecnologias Utilizadas

* **PHP** (Processamento no backend e manipulação de arquivos)

* **HTML5** (Estrutura da interface)

## 🔧 Como Executar o Projeto

### Pré-requisitos

* **PHP 7.4** ou superior instalado em sua máquina.

* Um servidor local (como **XAMPP**, **WAMP**, **Laragon**) ou o servidor embutido do PHP.

### Passo a passo

1. **Clone o repositório:**

   ```
   git clone https://github.com/seu-usuario/seu-repositorio.git
   
   ```

2. **Navegue até a pasta do projeto:**

   ```
   cd seu-repositorio
   
   ```

3. **Inicie o servidor embutido do PHP:**

   ```
   php -S localhost:8000
   
   ```

4. **Acesse no navegador:**
   Abra a URL `http://localhost:8000` para visualizar e testar a aplicação.

## 📝 Exemplo de Formato do Log (`log_acessos.txt`)

Os acessos permitidos são salvos linha por linha com os campos separados por ponto e vírgula `;`:

```
Nome;Ano
Maria;2000

```
