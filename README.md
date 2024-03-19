# Curso php UpInside
Repositório com o conteúdo do curso de php da UpInside

## Guia de codificação - PSR's

- **PRS-1 - Padrão básico de codificação**
    - O que **DEVE** ser considerado como codificação padrão para garantir um alto nível de interoperabilidade técnica entre códigos compartilhados

    - **Tags**
        - <?php ?> - para uso padrão

        - <?= ?> - para saída de dados. Essa tag é um shorthand de <?php echo ?>

    - **Codificação de caracteres**
        - Arquivos DEVEM usar UTF-8 sem BOM para código PHP (configurar a IDE para a codificação correta)

    - **Efeitos colaterais (side effects)**
        - O **princípio da responsabilidade clara** evita efeitos colaterais. Ou seja, devemos separar o código do sistema em arquivos distintos, como cada classe em um arquivo contendo apenas ela, um arquivo para funções, configurações de ambiente e conexão etc

    - **Classes PHP**
        - Cada classe deve ter seu próprio arquivo, com pelo menos um nível de namespace e seu nome deve ser declarado com StudlyCaps

        - Constantes da classe devem ser declaradas em MAIÚSCULO e separadas por underscores NOME_MAIUSCULO

        - Propriedades da classe podem ser definidas com $StudlyCaps, $camelCase ou $under_score. Não existe uma recomendação rígida para qual forma usar, mas sempre usar a mesma do início ao fim

        - Métodos da classe devem ser declarados sempre em camelCase()

- **PER Coding Style**
    - Enumera um conjunto compartilhado de regras e expectativas sobre como formatar o código PHP

    - **Padrão básicos de codificação**
        - O código deve seguir todas as recomendações listadas na PSR-1

    - **Arquivos**
        - Sempre devem terminar com uma linha em branco (Unix linefeed)

    - **Somente PHP**
        - Um arquivo somente com PHP deve omitir a tag `?>` de fechamento

    - **Legibilidade**
        - Pode adicionar linhas em branco para separar blocos de código

    - **Namespaces**
        - Após declarar um, sempre deixe uma linha em branco para então continuar seu código. Declarações (declare) vem antes

    - **use**
        - Quando presentes devem ser declarados um por linha após os namespaces

        - **DEVE** haver um `use` por declaração

        - DEVE haver um espaço após o bloco de declaração do use

    - **Classes, propriedades e métodos**
        - Entenda classes como todas as classes, interfaces e traits

        - extends e implements
            - **DEVEM SEMPRE** ser declarados na mesma linha do nome da classe, se ambos, primeiro o extends

        - Em uma lista de **implements** você pode declarar todas as **interfaces** em uma linha ou declarar uma por linha

        - Propriedades **DEVEM** sempre declarar a visibilidade (public, protected, private) e **NUNCA** deve usar em sua declaração a palavra-chave `var`

        - **NÃO DEVE** haver mais de uma propriedade declarada por linha e nunca user underscore_  ou _underscore para declarar visibilidade protegida ou privada

        - Métodos assim como propriedades **DEVEM** ter sua visibilidade declarada e não usar underscore_  ou  _underscore

        - Nomes de métodos não podem conter espaços nele ou após ele. A chave de abertura deve estar na sua própria linha, a de fechamento na próxima linha após o corpo e devem ser declarados com $camelCase()

        - Na lista de argumentos de um método deve haver um espaço depois da virgula mas não antes, argumentos com valores padrão dever ir ao final da lista

        - **abstract, final e static**
            - **abstract e final** quando presentes, **DEVEM** ser declaradas **ANTES** da declaração de visibilidade

            - Quando presente, a **static** **DVE** ser declarada **DEPOIS** da declaração de visibilidade

        - **Chamada de métodos funções**
            - Não use espaços entre o nome declarado e os parênteses de abertura e fechamento

            - Na lista de argumentos deve haver um espaço depois da vírgula mas não antes

            - A lista de argumentos também pode ser dividida em várias linhas

- **Regras gerais da PSR para estruturas de controle**
    - **DEVE** haver um espaço após a palavra-chave da estrutura de controle

    - **NÃO DEVE**  haver um espaço após o parêntese de abertura nem antes do parêntese de fechamento

    - **DEVE** haver um espaço entre o parêntese de abertura e a chave de abertura

    - O corpo da estrutura de controle **DEVE** ser recuado uma vez

    - A chave de fechamento **DEVE** estar na próxima linha após o corpo da abertura

    - O corpo de qualquer estrutura **DEVE** estar entre chaves

    ```php
    if ($variable) {
        // código
    } else {
        // código
    }
    ```

- **Closures**
    - **DEVEM** ser declaradas com um espaço depois de function e um espaço antes e depois de use

    - A chave de abertura **DEVE** ir na mesma linha do nome, a chave de fechamento **DEVE** ir uma linha após o corpo

    - **NÃO DEVE** haver espaço após o parêntese de abertura ou antes do parêntese de fechamento na lista de argumentos ou variáveis

    - **DEVE** haver na lista de  argumentos ou variáveis um espaço depois da vírgula mas nunca antes

    - Argumentos com valor padrão **DEVEM** ir ao final da lista de argumentos

- **PSR-4 Carregamento Automático**
    - Este PSR descreve uma especificação para o carregamento automático e interoperável das classes, assim como mostra onde colocar os arquivos em seu projeto

    - **Especificação**
        - Entenda classes como todas as classes, interfaces e traits

        1. Um nome de classe totalmente qualificado deve seguir o seguinte formato
            a. `\<VendorNamespace>(\<SubNamespace>)*<ClassName>`

            b. O namespace completo **DEVE** ter um nome de nível superior (Vendor)

            c. O namespace **PODE** ter um ou mais sub-namespaces

            d. O namespace **DEVE** terminar com no nome da classe

            e. Underscore não tem qualquer efeito especial no namespace

            f. Caracteres alfabéticos **PODEM** ter qualquer combinação de minúscula e maiúscula

            g. Todos os namespaces **DEVEM** ser referenciados de forma única

            h. O Vendor namespace e alguns dos primeiros níveis de sub-namespace **DEVEM** corresponder a um diretório base

            i. Cada sub-namespace seguinte deve corresponder a um sub-diretório dentro do diretório base, cada separador de sub-namespace corresponde a um separador de diretório no sistema operacional

        2. Implementações de autoload **NÃO DEVEM** lançar exceções, gerar erros de qualquer nível ou retornar um valor

- **IDE**
    - **Linhas**
        - Procure manter suas linhas com no máximo 80 caracteres, quando necessário você poderá usar até 120

    - **Espaços finais**
        - Certifica-se que o último caractere da linha não é um espaço em branco

    - **Recuo**
        - Use 4 espaços para indentar seu código, nunca o TAB

    - **`true`, `false`, `null`**
        - São palavras-chave do tipo reservado do PHP, devem ser escritas sempre em letra minúscula usando a versão curta.

        - Use `bool` e não `boolean`, `int` e não `integer`

    - A chave de abertura da classe **DEVE** seguir na próxima linha após o nome e a chave de fechamento **DEVE** seguir na próxima linha após o corpo

    - A lista de argumentos também podem ser declaradas na próxima linha. Quando isso ocorrer cada argumento assim como os parênteses **DEVEM** estar em uma linha subsequente e você deve adicionar um recuo para todos

## Comandos de saída - Comandos para imprimir valores para o usuário

- **`echo`**
    - É uma construção da linguagem usada para exibir dados e não possui nenhum valor de retorno

    - Pode ser usado para imprimir mais de um valor, separados por vírgula e mesclar html e php

    - Podemos passar variáveis e expressões. Contudo, para que essas sejam lidas da forma correta, devemos usar aspas duplas. Com aspas simples elas serão convertidas para string e não executadas

    ```php
    <?php
        $nome = 'Fulano';
        $idade = 25;
        $num1 = 10;
        $num2 = 20;

        echo "Nome: ", $nome, " | Idade: ", $idade;
        echo "<p>Nome: $nome</p>";
        echo "A soma entre $num1 e $num2 é igual a ", ($num1 + $num2);
    >
    ```

    - **`echo`** tem uma forma resumida de escrita muito útil para exibir expressões simples ou variáveis diretamente no html, tornando o código mais limpo e legível
        ```
        <p><?= $mensagem; ?></p>
        <p><?= "A soma é: ", ($num1 + $num2); ?></p>
        ```
    - É importante notar que o shorthand `<?= ?>` é específico para a impressão de valores na saída e não pode ser usado para executar blocos de código mais complexos. Para tarefas mais avançadas ou estruturas de controle, a forma completa com `echo` ou outros construtores pode ser necessária.

- **`print`**
    - É uma construção da linguagem mais antiga e menos usada que o `echo`

    - Retorna o valor 1. A saída será o que foi passado, mas podemos atribuir o `print` a uma variável e usar em expressões, como a condicional
        ```php
        <?php
        print "Olá, mundo"; // Imprime Olá , mundo

        $resultado = print "Olá, mundo";
        echo $resultado; // Isso imprime 1

        $status = ($condicao) ? print 'verdadeiro' : print 'falso';
        >
        ```

    - Não suporta a impressão de múltiplos valores separados por vírgula

- **`print_r`**
    - É usado para exibir informações sobre uma variável de forma mais legível para humanos

    - A saída dos dados é formatada para facilitar a compreensão da estrutura da variável

    - Mostrará propriedades protegidas e privadas de objetos. Os membros da classe estática não serão mostrados

    - String, int ou float terão o valor impresso. Array e objetos serão apresentados em formato de chave e valor

    ```php
    <?php
    $frutas = array('maçã', 'banana', 'laranja');
    print_r($frutas)

    // Saída
    Array
    (
        [0] => maçã
        [1] => banana
        [2] => laranja
    )
    ?>
    ```

- **`printf`**
    - É usada para imprimir uma string formatada, onde marcadores de posição são substituídos pelos valores fornecidos.

    - Oferece controle sobre a formatação, permitindo especificar o número de casas decimais, a largura do campo e outros detalhes de formatação.

    - Retorna o número de caracteres que foram impressos

    ```php
    // %s é um marcador para string e %d para int
    // Existem diversos marcadores para outros tipos de dados e formatação

    <?php
    $nome = "João";
    $idade = 30;
    printf("Nome: %s, Idade: %d", $nome, $idade);

    $produto = "Notebook";
    $preco = 1200.50;
    printf("Produto: %s, Preço: %.2f", $produto, $preco);

    $numero = 42;
    printf("Número: %05d", $numero);
    ?>

    $caracteres_impressos = printf("Olá, %s!", "Mundo");
    echo "\nNúmero de caracteres impressos: $caracteres_impressos";
    ```

    - A função `printf` é útil quando você precisa de mais controle sobre a formatação da saída, mas é importante usá-la com cuidado para evitar vulnerabilidades de segurança, como a Injeção de Formato.

- **`vprintf`**
    - Assim como `printf`, `vprintf` é usada para imprimir uma string formatada, onde marcadores de posição são substituídos pelos valores fornecidos. A diferença está no fato de que vprintf aceita um array como argumento para os valores.

    ```php
    <?php
    $valores = array("João", 30);
    vprintf("Nome: %s, Idade: %d", $valores);
    ?>
    ```

    - A principal diferença entre `printf` e `vprintf` é que a última aceita um array como argumento para os valores, o que pode ser útil quando você tem muitos valores para formatar e deseja organizá-los em um array. Isso pode tornar o código mais limpo e modular em certas situações.

- **`var_dump`**
    - É uma ferramenta poderosa de depuração que exibe informações detalhadas sobre uma ou mais variáveis, incluindo o tipo e o valor, bem como o número de elementos em arrays e objetos

    - Todas as propriedades públicas, privadas e protegidas dos objetos serão retornadas na saída, a menos que o objeto implemente um método `__debugInfo()`

    ```php
    <?php
    $nome = "João";
    $idade = 30;
    var_dump($nome, $idade);

    // Saída
    string(4) "João"
    int(30)
    ?>
    ```

    - `var_dump` pode ser usado diretamente em expressões ou variáveis, sem a necessidade de atribuição.

## Variáveis

- **Básico**
    - São representadas por um $ seguido no nome da variável. É case sensitive e um nome válido por começar apenas com letras ou underscore seguidos de qualquer letra, número ou underscore

    - Variáveis por padrão tem um valor atribuído. Dessa forma, se atribuirmos o valor de uma variável para outra, a alteração de uma dessas variáveis não afetará a outra

    ```php
    <?php
    $a = 1;
    $b = $a
    $a = 2;

    echo $a //2
    echo $b //1
    ?>
    ```

    - Na **atribuição por referência** a nova variável simplesmente referência (em outras palavras, torna-se um apelido para ou aponta para) a variável original. **Alterações na nova variável afetam a original,e vice-versa**

    - Para atribuir por referência, simplesmente adicione um e-comercial & na frente do nome da variável que estiver sendo atribuída e somente variáveis nomeadas podem ser atribuídas por referência

    ```php
    <?php
    $foo = 'Bob';
    $bar = &$foo;

    echo $foo; //Bob
    echo $bar //Bob

    $age = 25;
    $newAge = &$age;
    $otherage = &(25 + 5); //Inválido; referencia uma expressão sem nome

    function test()
    {
        return 25;
    }

    $newOtherAge = &test(); //Inválido
    ?>
    ```

- **Variáveis Predefinidas** 