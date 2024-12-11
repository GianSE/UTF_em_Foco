
# 1. História de Usuário

A Tabela 3 a seguir contém as Histórias de Usuárias elicitadas. 

<table>
    <thead>
        <tr style="background-color: purple; color: white" >
            <th style="border-style:solid;border-width:1px;text-align:center">ID</th>
            <th style="border-style:solid;border-width:1px;text-align:center">História de Usuário</th>
            <th style="border-style:solid;border-width:1px;text-align:center">Critérios de aceitação</th>
            <th style="border-style:solid;border-width:1px;text-align:center">Prioridade</th>
            <th style="border-style:solid;border-width:1px;text-align:center">RF/RNF relacionado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US01</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como um aluno, eu quero criar um cadastro para ter mais segurança dos meus dados.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve permitir o cadastro com nome, e-mail e senha.
Após o cadastro, o sistema deve enviar um e-mail de confirmação.</li><li> Deve haver validação para campos obrigatórios (e-mail válido e senha com no mínimo 8 caracteres).</li><li>Após o cadastro, o sistema deve enviar um e-mail de confirmação.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF01</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US02</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário, quero consultar as informações e as notícias do site, para que eu possa me manter atualizado sobre os eventos ee novidades relevantes do campus.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve exibir uma lista de notícias em ordem cronológica decrescente.</li><li>Cada notícia deve exibir título  e data de publicação.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle"> Média </td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF2</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US03</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como um ex-aluno, eu quero ser capaz de alterar meu cadastro, pois não utilizo mais meu e-mail de estudante.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve permitir a alteração do e-mail cadastrado.</li><li> O novo e-mail deve ser validado antes de salvar a alteração.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Média</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF3</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US04</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário, quero poder acessar links para outras páginas, para que eu possa navegar facilmente por diferentes seções do site e obter informações adicionais.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O site deve ter um menu de navegação acessível em todas as páginas.</li><li> Cada link no menu deve redirecionar para a página correta.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle"> Média</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF4</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US05</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como um administrador, eu quero inserir notícias no site, para que eu possa manter o site atualizado com as notícias.
</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve permitir o preenchimento de título, corpo da notícia e categoria.</li><li>Após salvar, a notícia deve aparecer na página de listagem de notícias.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF5</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US06</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário, quero consultar notícias filtrando por categorias específicas, para que eu possa encontrar facilmente as notícias que mais me interessam, sem precisar percorrer todo o conteúdo do site.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve oferecer um filtro por categorias na página de listagem de notícias.</li><li>Apenas as notícias da categoria selecionada devem ser exibidas.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Média</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF6</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US07</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário eu quero poder excluir minha conta para que caso eu não goste do conteúdo do site, eu possa desvincular meus dados da plataforma.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve exibir uma opção de exclusão na página de configurações da conta.</li><li> Deve solicitar uma confirmação antes de excluir definitivamente os dados do usuário.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF7</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US08</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário, eu quero que minha senha seja armazenada de maneira segura, com criptografia, para que meus dados pessoais fiquem protegidos contra acessos não autorizados.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve armazenar as senhas utilizando um algoritmo de hash seguro (ex.: bcrypt).</li><li> Não deve ser possível visualizar a senha original no banco de dados.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF8</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US09</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como um administrador, eu quero alterar/editar notícias no site, para que eu possa corrigir uma notícia caso necessário.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve permitir que o administrador edite o título, corpo e categoria de uma notícia existente.</li><li> Após a edição, as alterações devem ser refletidas na página de listagem de notícias.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF9</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US10</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como um administrador, eu quero deletar notícias no site, para que eu possa manter o site com as notícias mais atuais e importantes.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve exibir uma opção para deletar notícias na interface de administração.</li><li> Deve solicitar uma confirmação antes de excluir uma notícia. Após a exclusão, a notícia não deve mais aparecer na listagem./li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF10</td>
        </tr>
         <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US11</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário, eu quero poder recuperar minha senha caso a tenha esquecido, para que eu possa acessar minha conta novamente sem precisar criar uma nova conta.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve oferecer um fluxo de recuperação de senha por e-mail.</li><li> Um link para redefinição de senha deve ser enviado ao e-mail do usuário cadastrado. O link deve expirar após um período de tempo definido.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Média</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF11</td>
        </tr>
       <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US12</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário, eu quero poder fazer logout de minha conta de maneira simples, para que minha sessão seja encerrada e minha conta não fique acessível para outras pessoas.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve exibir uma opção de logout visível em todas as páginas enquanto o usuário estiver logado.</li><li> Após o logout, o usuário deve ser redirecionado para a página inicial.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Baixa</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF12</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US13</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como um usuário eu quero fazer login com id e senha, pois quero acessar minhas informações mais rápido.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve validar as credenciais do usuário (ID e senha).</li><li>Deve exibir uma mensagem de erro caso o ID ou senha estejam incorretos.
Após o login, o usuário deve ser redirecionado para sua página inicial personalizada.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF13</td>
        </tr>
        <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US14</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como usuário quero comentar nas notícias e publicações para que eu possa expressar minha opinião acerca dos acontecimentos da UTF.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve permitir que usuários logados insiram comentários em notícias.</li><li>Cada comentário deve exibir o nome do autor e a data/hora em que foi postado.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Média</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF14</td>
        </tr>
       <tr>
            <span id="ustory-01"></span>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">US15</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1">Como administrador, eu quero poder excluir comentários inapropriados ou que violem as regras do site, para garantir que o ambiente do site permaneça seguro e respeitoso para todos os usuários.</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle" rowspan="1"><ol><li>O sistema deve exibir uma opção para deletar comentários na interface de administração.</li><li>Após a exclusão, o comentário deve ser removido permanentemente da página de notícias. Deve haver um log registrando qual administrador realizou a exclusão e o motivo.</li></ol></td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">Alta</td>
            <td style="border-style:solid;border-width:1px;text-align:center;vertical-align:middle">RF15</td>
        </tr>
</table>

<div style="text-align: center">
<p>Tabela 3: História de Usuário</p>
</div>

## 5. Referências bibliográficas
