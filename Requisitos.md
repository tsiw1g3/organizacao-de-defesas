# Requisitos

### O sistema possui usuários:
- Cada usuário possui um código identificador.
- Cada usuário possui um nome.
- Cada usuário possui um e-mail.
- Cada usuário possui uma senha.
- Cada usuário está vinculado a uma instituição.
- Cada usuário possui uma titulação.
- Cada usuário pode possuir um Lattes.
- Cada usuário pode visualizar, duplicar, editar e remover suas defesas. 

### O sistema possui bancas:
- Cada banca tem um código identificador.
- Cada banca tem uma data de cadastro.
- Cada banca possui membros, divididos em => Orientador: Possui acesso total a edição e leitura e é responsável pela criação da banca. O orientador pode convidar membros da banca; Membro da banca: Possui acesso à leitura em qualquer momento e à edição até a data da defesa e pode avaliar o orientando;
Orientando: Pode possuir acesso apenas à leitura, ou pode fazer upload da defesa, caso a permissão lhe seja concedida. Não poderá acessar o relatório de defesa.
- Cada banca possui uma data da defesa.
- Cada banca pode gerar um relatório de defesa no formato PDF.
- Cada banca pode gerar uma ata no formato PDF.

### O sistema possui documentos:
- Cada documento possui um código identificador.
- Cada documento possui um nome baseado no hash e extensão.
- Cada documento possui usuário que o submeteu
- Cada documento possui uma banca a qual está vinculado
- Cada documento possui uma descrição sobre que tipo de documento é
- Cada documento possui uma data de submissão no sistema.

### O sistema possui tela de login:
- Usuários podem fazer login com email e senha
- Usuários podem solicitar alteração de senha

### O sistema possui módulo de gestão de usuários
- Há um usuário admin que pode cadastrar docentes
- Docentes podem cadastrar discentes e avaliadores
- Docentes podem cadastrar bancas e atribuir os participantes

### O sistema possui tela dos trabalhos aprovados na defesa
- Há filtros de busca por data e texto completo

