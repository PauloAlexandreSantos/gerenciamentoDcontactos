Gerenciamento de vários contatos
aplicativo da web


Desenvolva um aplicativo web tradicional para gerenciar contatos

Recursos do aplicativo

A aplicação web deve ter as seguintes funcionalidades:

1 - Uma página para listar as pessoas existentes.

2 - Uma página para adicionar uma nova pessoa ou editar uma pessoa existente.

3 - Uma página para mostrar os detalhes da pessoa.

4 - Uma página para adicionar um novo contato ou editar um contato existente.

5 - Permitir a exclusão de uma pessoa.

6 - Permitir a exclusão de um contato.

Requisitos

Uma pessoa é uma entidade com 3 campos: ID, nome e endereço de e-mail. O nome deve ser uma string de qualquer tamanho maior que 5 e o email deve ser um endereço de email válido.

Uma pessoa pode ter qualquer número de contatos. Um contato é uma entidade com 3 campos: ID, CountryCode e Number. O número deve ter exatamente 9 dígitos, CountryCode deve ser o valor de CallCodes obtido de uma API externa.

A API a seguir contém informações do país, incluindo nomes e códigos de chamada: https://restcountries.eu/

O formulário para adicionar um novo contato deve exibir uma lista suspensa pesquisável onde o usuário selecionará o país, bem como uma entrada para digitar o número. A lista de países exibida ao usuário deve conter o nome do país e o código de chamada dentro de (). - exemplo: Portugal (351)

Os países exibidos na lista suspensa devem vir diretamente da API e permitir a pesquisa usando os recursos de filtragem da API.

Os contatos salvos no banco de dados devem conter o número inserido e uma referência ao código de chamada selecionado.

Cada linha na página da lista de pessoas deve ter um link para mostrar os detalhes da pessoa, um link para editar a pessoa e um botão para excluir a pessoa. A exclusão deve realizar uma exclusão reversível do registro, mantendo o registro no banco de dados, mas não visível.

A página de detalhes da pessoa deve mostrar todos os campos da pessoa, bem como a lista de contatos associados a ela. mais o link de edição e o botão de exclusão. Também deve haver um botão para criar um novo contato associado à pessoa.

Cada um dos contatos na página de detalhes da pessoa deve ter um link de edição e um botão de exclusão.

O contato e o endereço de e-mail devem ser exclusivos no sistema. Não pode haver várias pessoas com o mesmo endereço de e-mail, nem qualquer tupla de contato duplicada (CountryCode + Number).
Requisitos adicionais
Os seguintes requisitos devem ser implementados se dentro do tempo de execução do teste:

Permitir a visualização de dados por qualquer pessoa, mas os recursos de edição e exclusão devem ser acessados ​​apenas por um usuário autenticado. Este pode ser um usuário estático criado anteriormente.
Adicione um ícone/avatar para cada pessoa. Use a seguinte API para gerar uma imagem quando a pessoa for criada. Armazene essa imagem no banco de dados e mostre-a na lista de pessoas e na página de detalhes da pessoa:
https://app.pixelencounter.com/api/basic/monsters/random
Crie uma página para visualizar o número de contatos por país, mostrando uma lista de países que possuem contatos e o número de contatos desse país.
Considerações
Quaisquer informações ou dados necessários da estrutura do banco de dados devem ser adicionados usando migrações e/ou sementes.

Sempre use os recursos nativos do Laravel quando possível, incluindo rotas, controladores, regras de validação de formulário, exclusões reversíveis e outros recursos.
Etapas de desenvolvimento

1 - Acesse a conta do cpanel e instale o Laravel

2 - Crie e inicialize um repositório e envie a versão de linha de base do site Laravel para ele

3 - Faça vários pushes com alterações de código de acordo com as melhores práticas
Notas
O ambiente de exercícios usa PHP versão 7.4.
Os arquivos env e .htaccess são necessários para o bom funcionamento do ambiente, e já estão presentes no ambiente. Por favor, não exclua ou altere esses arquivos, a menos que seja estritamente necessário.
Compositor
O Composer é necessário para o Laravel e está disponível no container usado para o exercício. Para usar o compositor, execute os comandos abaixo (ou outros comandos necessários):

instalação do compositor
atualização do compositor
compositor dump-autoload
GIT
Para gerenciamento de repositório, use um repositório externo (gitlab, bitbucket ou github), desde que o repositório seja público.
