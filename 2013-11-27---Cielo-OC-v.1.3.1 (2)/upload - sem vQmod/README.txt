M�dulo Cielo sem gateways de pagamento Brasil (Brazil module)

Este � um m�dulo de pagamento para OpenCart que permite a comunica��o DIRETA entre a sua loja e a Cielo sem utilizar NENHUM gateway de pagamento!

Livre-se para sempre das tarifas e percentuais dos gateways de pagamento tais como PayPal, PagSeguro, BCash e etc. e passe a pagar apenas o percentual negociado entre voc� e sua operadora!

Um exemplo: se sua loja realiza duas vendas por dia, num valor m�dio de R$ 100,00.
== PayPal seus custos ser�o: 6,4% + R$ 0,60 por transa��o => R$ 420,00
== Cielo: um contrato normal da Cielo � de cerca de 3%* => R$ 180,00.
(* Estimativa. A taxa efetiva depende da sua negocia��o com o Banco e a Cielo).

Uma economia de R$ 240,00 por m�s, mais de 50%! E o melhor � que, at� o presente momento, a afilia��o de e-commerce da Cielo n�o est� sujeita a nenhuma mensalidade!

Voc� poder� oferecer parcelamentos personalizados com e sem juros. � poss�vel personalizar descontos, valores m�nimos e m�ltiplos parcelamento para cada bandeira, separadamente.

As opera��es de consulta, captura (total e parcial) e cancelamento (total e parcial) s�o feitas diretamente na �rea administrativa da sua loja. Voc� n�o precisar� acessar o site da Cielo para essas opera��es administrativas, tudo � feito na sua pr�pria loja.

Toda a comunica��o com a Cielo (XML) � armazenada em uma tabela separada no DB, possibilitando a resolu��o de pend�ncias.

Compat�vel com qualquer moeda, desde que tenha o Real (BRL) cadastrado como moeda principal ou secund�ria. Todos os valores s�o autorizados em reais, convertidos automaticamente. J� vem com o portugu�s e ingl�s configurados.

Compat�vel com "buy page" na loja ou na Cielo. Para a "buy page" na loja voc� ser� obrigado a passar pelo PCI compliance (boa sorte!), o que � caro e complicado. Recomendamos utilizar a "buy page" na Cielo, pois � muito mais simples e seguro.

Mas se algu�m quiser tentar homologar uma "buy page" na loja, teremos prazer em tentar ajudar (na verdade temos curiosidade de descobrir as dificuldades junto com voc�).

A licen�a � POR LOJA onde for utilizado este m�dulo de pagamento.

Voc� precisa ser afiliado � Cielo (veja: http://www.cielo.com.br/). Atualmente compat�vel com Visa, Mastercard, American Express, Diners Club, Elo, Discover, JCB e Aura. Cart�es internacionais s�o suportados, basta a libera��o da Cielo para a sua loja.

Voc� pode utilizar o m�dulo sem um certificado SSL. No entanto, recomendamos que voc� tenha esse certificado (mesmo que seja compartilhado), pois a Cielo vai pedir um logotipo em GIF, hospedado em https. Eu recomendo a Hostgator (visite esta p�gina: http://www.hostgator.com.br/6860.html). Todos os planos tem SSL compartilhado gr�tis e o plano G vem com SSL e IP dedicado gratuito. Eu uso esse provedor em alguns sites e funciona perfeito com este m�dulo.

Observa��o 1: acompanharemos suas d�vidas durante o procedimento de homologa��o da Cielo, mas n�o somos respons�veis pela homologa��o. Utilize uma p�gina com SSL e "buy page" na Cielo e voc� provavelmente n�o ter� problemas. Se voc� j� tem a Cielo homologada (em outro site ou gateway) ent�o poder� come�ar a utilizar este m�dulo sem uma nova homologa��o.

Observa��o 2: embora este m�dulo preveja a configura��o para cart�es de d�bito e cobran�as recorrentes, estas fun��es ainda n�o est�o operacionais. N�o � culpa do m�dulo, mas dos bancos e da Cielo. Se voc� � um mortal normal, evite essas op��es e trabalhe com o cr�dito, ok?

CHANGELOG:

Vers�o 1.3.1:
    Consertado o bug de cria��o das tabelas do banco de dados na instala��o.
    Adicionado suporte � vers�o 1.5.6 do OpenCart, na vers�o com vQmod.

Vers�o 1.3:
    Atualiza��o para o novo padr�o de XML da Cielo (1.2.1).
    Acrescentado suporte �s bandeiras JCB e Aura.
    Corrigido bug de sele��o de parcelas e bandeira no checkout.
    Adicionada op��o de exibi��o das figuras das bandeiras no checkout.
    Melhorias na interface de configura��o do m�dulo no Admin.
    Corrigido bug da ordem de exibi��o do m�dulo.
    Funcionalidade de normaliza��o das configura��es no update (upgrade suave).

Vers�o 1.2.1:
    Corrigido bug de cookie.
    Suprimidos erros no GA.
    Melhorias na p�gina de transa��o negada.
    Nova vers�o de XML no vQmod para sistemas Linux.
    N�o liberada para distribui��o.

Vers�o 1.2:
    Corrigido erro de vari�vel n�o declarada (erro raro)
    Inclu�do o suporte �s vers�es 1.5.5 e 1.5.5.1 do OpenCart

Vers�o 1.1:
    Inclu�do suporte � vers�o 1.5.4 e 1.5.4.1 do OpenCart
    Corrigido alguns bugs que ocorriam com vers�es antigas do PHP
    Inclu�do suporte ao Google Analytics (estat�sticas de uso)
    Corrigido erro de "headers already sent"
    Apromirada a view �rea administrativa

Vers�o 1.0:
    Bugs corrigidos
    Inclu�do o tratamento de erros
    Inclu�do Sandbox autom�tico (n�o � mais necess�rio preencher o n�mero de estabelecimento e chave de testes)
    Melhorada a view do checkout
    Introdu��o da vers�o com vQmod

Vers�o 0.8:
    Vers�o de testes inicial com v�rios bugs. N�o liberada para distribui��o.

Informa��es para Upgrade:
- Para atualizar o m�dulo para a vers�o mais recente, basta sobrescrever os arquivos antigos com os novos. No primeiro acesso �s configura��es do m�dulo no admin, este far� a atualiza��o autom�tica (upgrade suave), sem perda das configura��es atuais e voc� j� ter� acesso �s novas op��es. N�o h� necessidade de desinstala��o e reinstala��o (ali�s, N�O fa�a isso).

Informa��es comerciais:
- Solu��o de pagamento com a Cielo, sem utiliza��o de gateways;
- Suporte a Visa, Mastercard, Diners Club, American Express, Elo e Discover. O suporte a Visa Electron e Redeshop � limitado pelo emissor do cart�o. Autoriza��es recorrentes precisam de condi��es especiais na Cielo;
- Suporte a cart�es internacionais, desde que sua loja seja autorizada pela Cielo para este tipo de opera��o.

Informa��es t�cnicas:
- Compat�vel com OpenCart 1.5.3.1, 1.5.4, 1.5.4.1, 1.5.5, 1.5.5.1 e 1.5.6. N�o temos planos de preparar o m�dulo para as vers�es mais antigas, mas se voc� precisar, basta nos mandar uma mensagem que tentaremos criar a adapta��o;
- Se poss�vel, utilize PHP 5.3 (mas funciona no 5.2);
- Funciona com ou sem vQmod. O download vem com ambas as vers�es. Caso opte pela vers�o sem vQmod, dois arquivos do OpenCart ser�o modificados (admin/sale/order.php e admin/view/template/sale/order_info.tpl);
- Com OpenCart vers�o 1.5.6 utilize sempre a vers�o COM vQmod;
- A tabela no banco de dados � independente. As tabelas originais do OpenCart n�o s�o modificadas;
- N�o precisa mexer em c�digo. Toda a instala��o e opera��o ocorre na �rea administrativa;
- Sandbox mode para testes (n�o precisa de n� de afilia��o, nem chave de seguran�a)
- Os valores m�nimos, parcelas m�nimas, descontos, parcelamentos sem juros, com juros da loja e com juros da administradora podem ser configurados independentemente para cada bandeira;
- � poss�vel operar com parcelamentos com e sem juros ao mesmo tempo (ex: de 2 a 4 parcelas sem juros, de 5 a 8 parcelas com juros da loja e de 9 a 12 parcelas com juros da administradora, etc..);
- Todas as opera��es administrativas (consulta, autoriza��o, captura e cancelamento) est�o dispon�veis para dentro da �rea administrativa do OpenCart, na p�gina do pedido;
- Todos os XML's enviados e recebidos da Cielo s�o armazenados em bando de dados;
- Compat�vel com qualquer moeda, desde que tenha o Real cadastrado como moeda principal ou secund�ria com o c�digo correto 'BRL'.
- Preparado para internacionaliza��o e j� vem com o portugu�s brasileiro e ingl�s configurados;
- Preparado para "buy page" na loja ou na Cielo, sendo este �ltimo a modalidade mais recomendada para pequenas lojas, devido aos custos e dificuldades do PCI compliance (procedimento de auditoria exigido pela Cielo);
- O uso de certificado SSL n�o � obrigat�rio, mas altamente recomendado. Al�m de aumentar a seguran�a de seus clientes (e melhorar as vendas) ser� exigido pela Cielo um logotipo da sua loja hospedado em ambiente seguro (https);
- O c�digo-fonte possui implementa��o de ferramenta de an�lise server side (GA) para log informa��es de instala��o e desempenho (apenas PHP >= 5.3) em shutdown function;

Informa��es sobre a licen�a:
- Este N�O � um software livre. A licen�a � comercial e POR LOJA onde for utilizado este m�dulo de pagamento. Se voc� � um desenvolvedor, repasse o custo desse m�dulo aos seus clientes e adquira uma licen�a para cada site desenvolvido.
- N�o temos nenhuma rela��o com a Cielo. Esse desenvolvimento � uma solu��o independente que utiliza a API da Cielo;
- Todos os direitos do c�digo fonte e sua funcionalidade s�o reservados ao autor, Victor Schr�der. Todos os direitos da marca Cielo, logotipo e ambiente de opera��o s�o reservados � Cielo.