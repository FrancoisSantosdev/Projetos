Versão simples de uma API em C# para atender aos requisitos descritos. Vale ressaltar que esta é uma solução básica e que, em um ambiente de produção, seria necessário considerar mais detalhes, como segurança, tratamento de erros mais robusto, escalabilidade e persistência de dados.




Aprimoramentos e Considerações:

Persistência de Dados: A solução atual mantém os dados na memória. Em um ambiente de produção, seria recomendável usar um banco de dados para persistir as transações.

Segurança: Implementação de autenticação e autorização para garantir que apenas corretores autorizados possam enviar negociações.

Tratamento de Erros: Adição de manipulação de erros mais robusta para lidar com situações inesperadas.

Escalabilidade: Para lidar com alto tráfego, a solução pode ser escalada horizontalmente com a adição de balanceamento de carga e particionamento de dados.

API RESTful: Implementação de uma API RESTful para comunicação mais padronizada.

Testes: Adição de testes unitários para garantir a robustez do código.

Logging: Inclusão de um sistema de log para rastrear eventos importantes.

Lembre-se, esta é uma solução básica dada a restrição de tempo de 2 horas, e em um ambiente real, muitos outros aspectos seriam considerados.
