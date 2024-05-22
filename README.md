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
    ?>
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
        ?>
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
    - São variáveis superglobais que fornecem informações sobre o ambiente de execução, como dados do servidor web, informações sobre a requisição HTTP, informações de sessão, entre outros. E estão sempre disponíveis independente do escopo

    - Algumas dessas são `$_GET, $_POST, $_REQUEST, $_SERVER, $GLOBALS`

- **Escopo de variáveis**
    - É o contexto no qual uma variável é definido e na maioria das vezes, uma variável tem apenas um escopo

    - **Escopo global**
        - Variáveis definidas fora de funções têm um escopo global, o que significa que podem ser acessadas em qualquer lugar do script.

        ```php
            <?php
            $num = 1; // Variável com escopo global
            ?>
        ```

    - **Escopo local**
        - Quando declaramos uma variável dentro de uma função, ela tem um escopo local, o que significa que só pode ser acessada dentro dessa função.

        ```php
            <?php
            function exemploEscopoLocal()
            {
                $variavelLocal = "Esta é uma variável local";
                echo $variavelLocal;
            }

            exemploEscopoLocal();  // A variável só é acessível dentro da função
            echo $variavelLocal; // Inválido; a variável $variavelLocal tem escopo local
            ?>
        ```

    - **Palavra-chave `global`**
        - É usada para acessar variáveis fora do escopo local de uma função

        ```php
            <?php
            // Só é possível para a função acessar a variável $num1 por causa da palavra-chave global
            $num1 = 2
            function sum()
            {
                global $num1;
                $num2 = 5
                $total = $num1 + $num2;
                echo $total;
            }
            sum()
            ?>
        ```

        - Também podemos acessar variáveis globais com o array especial $GLOBAL onde o nome da variável global é a chave e o conteúdo, o valor

        ```php
            <?php
            // Só é possível para a função acessar a variável $num1 por causa da palavra-chave global
            $a = 1;
            $b = 2;
            function sum()
            {
                $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
            }
            sum();
            echo $b;
            ?>
        ```

- **Variáveis estáticas**
    - **Existem apenas no escopo de uma função local**, mas não perde seu valor quando a execução do programa sai desse escopo

    - Variáveis estáticas podem receber valores que são o resultado de expressões constantes, mas expressões dinâmicas, como chamadas de função, causarão um erro de análise.

    ```php
        <?php
        //Esta função é totalmente inútil, pois toda vez que é chamada, ela define $a = 0 e imprime 0. O $a ++ que incrementa a variável não serve para nada, pois assim que a função sai, a variável $a desaparece
        function test()
        {
            $a = 0;
            echo $a;
            $a++;
        }

        //Agora, $a é inicializado apenas na primeira chamada da função e toda vez que a função test2() é chamada ela imprimirá o valor de $a e o incrementará.
        function test2()
        {
            static $a = 0;
            echo $a;
            $a++;
        }
        ?>
    ```

    - Variáveis estáticas também fornecem uma maneira de lidar com funções recursivas. Uma função recursiva é aquela que chama a si mesma. Deve-se ter cuidado ao escrever uma função recursiva porque é possível torná-la recursiva indefinidamente. Você deve ter certeza de ter uma maneira adequada de encerrar a recursão.

    ```php
        function test()
        {
            static $count = 0;

            $count++;
            echo $count;
            if ($count < 10) {
                test();
            }
            $count--;
        }
    ```

## Tipos de dados

- Para verificar o valor e o tipo de uma expressão, podemos usar o `var_dump()` . Para recuperar o tipo de uma expressão, devemos usar a função `get_debug_type()`. No entanto, para verificar se uma expressão é de um determinado tipo, usamos as funções `is_type` (is_string, is_int, …)

- Tipos
    - **null**
        - É o tipo unitário do PHP, ou seja, possui apenas um valor: `null`

        - Variáveis indefinidas e `unset()` resolverão para o valor `null`

    - **bool**
        - Possui apenas dois valores e é usada para expressar um valor verdadeiro

        - Pode ser `true` ou `false`

        - Valores considerados **false**
            - `false` - o próprio false

            - `0` - zero inteiro

            - `0.0` e `-0.0` - zero float

            - `“”` ou `“0”` - string vazia ou string com zero

            - `[]` - array vazia

            - `null` - o tipo especial null
            
        - Todos os outros valores são considerados **true** incluindo `resource` e `NaN`

    - **int**
        - É um número do conjunto Z = {…, -2, -1, 0, 1, 2, …}

        - Pode ser especificado em notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2)

        - Notações
            - **Octal** - preceder o número com um `0` e a partir do php 8.1.0, a notação octal também pode ser precedida por 0o ou 0O

            - **Hexadecimal** - preceder o número com `0x`

            - **Binária** - preceder o número com `0b`

            ```php
                <?php
                $a = 1234; // número decimal
                $a = 0123; // número octal (equivalente a 83 em decimal)
                $a = 0o123; // número octal (a partir do PHP 8.1.0)
                $a = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
                $a = 0b11111111; // número binário (equivalente ao 255 decimal)
                $a = 1_234_567; // número decimal (a partir do PHP 7.4.0)
                ?>
            ```

    - **float**
        - Números de ponto flutuante (também conhecidos como floats, doubles ou números reais) podem ser especificados utilizando qualquer uma das seguintes sintaxe

        ```php
            <?php
            $a = 1.234;
            $b = 1.2e3;
            $c = 7E-10;
            $d = 1_234.567; // a partir do PHP 7.4.0
            ?>
        ```

        - **Tem precisão limitada**

        - Além disso, números racionais que têm representação exata em números em base 10, como `0.1 ou 0.7`, não possuem representação exata em ponto flutuante na base 2, Portanto não existe conversão para o formato interno sem uma pequena perda de precisão. Isso pode ocasionar resultados confusos: por exemplo, `floor((0.1+0.7)*10)` normalmente retornará `7`, em vez do resultado esperado `8`, porque a representação interna final será algo como `7.9999999999999991118...`

        - Comparando **floats**
            - Testar números de ponto flutuante com igualdade é problemático, por causa da maneira como são representados internamente. Contudo, podemos contornar esse limitação usando o **“valor de erro máximo”** que é chamado de **epsilon ou unidade de erro**, e deve ser a diferença mínima aceitável no resultado dos cálculos

            ```php
                <?php
                // $a e $b serão considerados iguais até o quinto dígito de precisão

                $a = 1.23456789;
                $b = 1.23456780;
                $epsilon = 0.00001;

                if(abs($a-$b) < $epsilon) {
                    echo "iguais";
                }
                >
            ```

    - **string**
        - É uma série de caracteres onde cada um é o mesmo de 1 byte

        - Podemos declarar um string literal de 4 formas:
            - **Aspas simples**
                - Para especificar um apóstrofo, escape-o com uma contra barra (\). Para especificar uma contra barra literal, duplique-a (\\). Todas as outras ocorrências de contra barra serão tratadas como uma contra barra literal. Isso significa que sequências de escape como, \n e \r serão literalmente impressas

            - Variáveis serão literalmente impressas também, quando dentro de aspas simples

            ```php
                <?php
                $hello = 'Olá, mundo';
                ?>
            ```

        - **Aspas duplas**
            - A vantagem de usar aspas duplas para escrita de string é que sequências de escape serão interpretadas com o seu real significado, e não impressas literalmente.

            - Nomes de variáveis serão expandidos, ou seja, serão interpretados com seus valores reais

            ```php
                <?php
                $hello = "Olá, mundo";
                ?>
            ```

        - **Sintaxe heredoc**
            - A sintaxe heredoc permite que você crie uma string multilinha e inclua variáveis dentro dela. Ela é definida usando <<< seguido por um identificador (pode ser qualquer palavra, mas não deve conter aspas), e a string é encerrada com o mesmo identificador na própria linha, sem espaços à frente.

            ```php
                <?php
                $variavel = "Mundo";
                $string = <<<EOD
                    Olá $variavel!
                    Esta é uma string heredoc.
                EOD;
                ?>
            ```

        - **Sintaxe nowdoc**
            - A sintaxe nowdoc é semelhante à heredoc, mas trata todo o conteúdo como texto literal, sem interpolação de variáveis. É definida usando `<<<'IDENTIFICADOR'` (com as aspas simples), e a string é encerrada com o mesmo identificador na própria linha, sem espaços à frente.

            ```php
                <?php
                $variavel = "Mundo";
                $string = <<<'EOD'
                    Olá $variavel!
                    Esta é uma string nowdoc.
                EOD;
                ?>
            ```

        - **Interpolação de variáveis**
            - Quando uma variável é especificada dentro de aspas duplas ou heredoc, a variável é interpretada

            - Há 2 tipos de sintaxe:
                - **Simples**
                    - Se um sinal de cifrão (`$`) for encontrado, o interpretador tentará obter tantos identificadores quantos forem possíveis para formar um nome de variável válido. Envolva o nome da variável com chaves para especificar explicitamente o fim do nome.

                    ```php
                        <?php
                        $suco = "maçã";

                        echo "Ele bebeu um pouco de suco de $suco.";

                        // Erro, porque "s" é um caracter válido para um nome de variável, procura $sucos em vez de $suco
                        echo "Ele bebeu um suco feito de $sucos.";

                        // Especificar explicitamente o nome da variável, delimitando com chaves.
                        echo "Ele bebeu um pouco de suco feito de ${suco}s.";
                        ?>
                    ```

                - **Complexa**
                    - Isto não é chamado sintaxe complexa porque a sintaxe é complexa, mas sim porque permite a utilização de expressões complexas.

                    - Qualquer variável escalar, elemento de um array ou propriedade de um objeto com uma representação de uma string pode ser incluída com essa sintaxe. A expressão é escrita da mesma forma como apareceria fora da string e então coloque-o entre `{}`

                    ```php
                        <?php
                        $great = 'fantástico';
                        echo "Isso é {$great}";
                        ?>
                    ```
    
    - **Array**
        - É uma estrutura de dados que pode armazenar múltiplos valores sob um único nome de variável. Arrays em PHP podem conter uma mistura de valores numéricos, strings e outros tipos de dados, tornando-os extremamente versáteis e úteis para lidar com conjuntos de dados.

        - Especificando um array
            - **Construtor array()**
                - `<?php $lista = array(1, 2, 3); ?>`

            - **Notação simples**
                - `<?php $lista = [1, 2, 3]; ?>`

            - **Array associativo**
                ```php
                    <?php
                    $lista = array("João" => 25, "Maria" => 30, "Pedro" => 35);
                    $lista = ["João" => 25, "Maria" => 30, "Pedro" => 35];
                    ?>
                ```

            - **Array multidimensional**
                ```php
                    <?php
                    $lista = [
                        ["João", 20, "Masculino"],
                        ["Maria", 22, "Feminino"],
                        ["Pedro", 21, "Masculino"]
                    ]
                    ?>
                ```

            - **Acessando elementos de um array**
                - Elementos do array podem ser acessados utilizando a sintaxe array[chave]

                ```php
                    <?php
                    echo $num[0]; // Saída: 10 | array simples
                    echo $age["Maria"]; // Saída: 30 | array associativo
                    echo $alunos[0][0]; // Saída: João | array multidimensional
                    ?>
                ```

            - **Adicionando elementos a um array**
                - Podemos modificar um array existente explicitamente assimilando valores a ele.

                ```php
                    <?php
                    // Operador de atribuição
                    $lista = [1, 2, 3];
                    $lista[] = 4

                    // Função array_push() - adiciona um ou mais elementos ao final do array
                    array_push($lista, 5);

                    // Índice específico
                    $lista[5] = 6;

                    // Adicionar chaves associativas
                    $lista["Pedro"] = 7;

                    // Adicionando múltiplos elementos com array_merge
                    $lista2 = [8, 9, 10];
                    $lista3 = array_merge($lista, $lista2);

                    // Expandindo um array com o operador ... | o spread operator tem vantagem performática em relação a função array_merge
                    $lista4 = [11, 12, 13];
                    $lista5 = [...$lista3, ...$lista4];
                    ?>
                ```

            - **Desconstruindo um array**
                - Arrays podem ser desconstruídos utilizando `[]` ou `list()`

                - Desconstruir um array se refere a atribuir seus valores a variáveis individuais de forma rápida e conveniente. A desconstrução de arrays é frequentemente usada quando se trabalha com funções que retornam arrays ou quando se precisa acessar rapidamente os elementos de um array.

                ```php
                    <?php
                    // list()
                    list($var1, $var2, ...) = $array;

                    // []
                    [$var1, $var2, ...] = $array;

                    // Exemplo simples com list()
                    $dados = array("João", "Maria", "Pedro");
                    list($nome1, $nome2, $nome3) = $dados;

                    echo $nome1; // Saída: João
                    echo $nome2; // Saída: Maria
                    echo $nome3; // Saída: Pedro

                    // Exemplo simples com []
                    $dados = array("João", "Maria", "Pedro");
                    [$nome1, $nome2, $nome3] = $dados;

                    echo $nome1; // Saída: João
                    echo $nome2; // Saída: Maria
                    echo $nome3; // Saída: Pedro
                    ?>
                ```

            - **Comparando arrays**
                - Existem várias formas de comparar array, mas algumas das mais comuns são as seguintes:
                    - **Comparação de igualdade**
                        - Podemos usar o operador de comparação `==` para verificar se dois arrays são iguais em termos de conteúdo e ordenação.

                        ```php
                            <?php
                            // Neste caso, a saída será "Os arrays são iguais." porque ambos contêm os mesmos elementos na mesma ordem.

                            $array1 = [1, 2, 3];
                            $array2 = [1, 2, 3];

                            if ($array1 == $array2) {
                                echo "Os arrays são iguais.";
                            } else {
                                echo "Os arrays são diferentes.";
                            }
                            ?>
                        ```

                    - **Comparação de identidade**
                        - Se quisermos verificar se dois arrays são exatamente os mesmos (ou seja, referem-se ao mesmo objeto na memória), podemos usar o operador de comparação `===`.

                        ```php
                            <?php
                            // Neste caso, a saída seria "Os arrays são idênticos." porque mesmo que sejam duas variáveis diferentes, seu conteúdo é igual, e assim, ambas as variáveis ocupam o mesmo lugar em memória.

                            // A comparação de identidade verifica se as variáveis referenciam o mesmo local na memória

                            $array1 = [1, 2, 3];
                            $array2 = [1, 2, 3];

                            if ($array1 === $array2) {
                                echo "Os arrays são iguais.";
                            } else {
                                echo "Os arrays são diferentes.";
                            }
                            ?>
                        ```

                    - **Comparação de diferença**
                        - Podemos comparar se dois arrays são diferentes usando o operador de comparação `!=` ou `!==`.

                        ```php
                            <?php
                            // Neste caso, a saída seria "Os arrays são diferentes." porque os elementos dos arrays são diferentes.

                            $array1 = [1, 2, 3];
                            $array2 = [4, 5, 6];

                            if ($array1 != $array2) {
                                echo "Os arrays são diferentes.";
                            } else {
                                echo "Os arrays são iguais.";
                            }
                            ?>
                        ```

                    - **Função `array_dif()`**
                        - Se quisermos encontrar elementos que estão presentes em um array e ausentes em outro, podemos usar a função `array_diff()`.

                        ```php
                            <?php
                            // Neste caso, $diferenca conterá os elementos que estão presentes em $array1 e ausentes em $array2.

                            $array1 = [1, 2, 3];
                            $array2 = [3, 4, 5];

                            $diferenca = array_diff($array1, $array2);

                            print_r($diferenca); // Saída: Array ( [0] => 1 [1] => 2 )
                            ?>
                        ```

                    - **Spread Operator**
                        - Esse operador serve para copiar elementos de um array para outro ou passar múltiplos argumentos para uma função que espera uma lista de argumentos

                        - **Expandindo arrays em outro array**
                            ```php
                                <?php
                                // Neste caso, $array2 contém todos os elementos de $array1, seguidos pelos elementos adicionais 4, 5 e 6. Isso é útil para adicionar elementos de um array a outro de forma rápida e concisa.

                                $array1 = [1, 2, 3];
                                $array2 = [...$array1, 4, 5, 6];

                                print_r($array2); // Saída: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
                                ?>
                            ```

                        - **Passando múltiplos argumentos para uma função**
                            ```php
                                <?php
                                // Neste caso, $argumentos é um array que contém os argumentos que serão passados para a função soma(). O operador ... permite que esses argumentos sejam passados como argumentos separados para a função.

                                function soma($a, $b, $c) {
                                    return $a + $b + $c;
                                }

                                $argumentos = [2, 3, 4];
                                $resultado = soma(...$argumentos);

                                echo $resultado; // Saída: 9
                                ?>
                            ```

                        - **Expandindo array associativo**
                            ```php
                                <?php
                                // Neste exemplo, os arrays associativos $array1 e $array2 são combinados em um único array $resultado, preservando as chaves associativas.

                                $array1 = ["a" => 1, "b" => 2];
                                $array2 = ["c" => 3, "d" => 4];

                                $resultado = [...$array1, ...$array2];

                                print_r($resultado); // Saída: Array ( [a] => 1 [b] => 2 [c] => 3 [d] => 4 )
                                ?>
                            ```

    - **Objetos**
        - Um objeto é uma instância de uma classe. Uma classe é uma estrutura que define o comportamento e as propriedades de um tipo de objeto

        - Características e conceitos relacionados a objetos:
            - **Propriedades**
                - As propriedades de um objeto são as variáveis associadas a ele. Elas representam os dados ou características que o objeto possui. As propriedades são definidas dentro da classe usando a palavra-chave `public`, `private` ou `protected`, dependendo do nível de visibilidade desejado.

                ```php
                    <?php
                    class Pessoa {
                        public $nome;
                        private $idade;
                        protected $email;
                    }
                    ?>
                ```

            - **Métodos**
                - Os métodos de um objeto são as funções associadas a ele. Eles representam o comportamento ou as ações que o objeto pode realizar. Assim como as propriedades, os métodos são definidos dentro da classe.

                ```php
                    <?php
                    class Pessoa {
                        public function mostrarNome() {
                            return $this->nome;
                        }
                    }
                    ?>
                ```

            - **Criando novo Objeto**
                - Para criar um objeto a partir de uma classe, é necessário realizar o processo de instanciação. Isso é feito usando a palavra-chave `new`

                ```php
                    <?php
                    $pessoa = new Pessoa();
                    ?>
                ```

            - **Acessando propriedades e métodos**
                - Podemos acessar as propriedades e métodos de um objeto usando a notação de seta (`->`).

                ```php
                    <?php
                    $pessoa->nome = "João"; // Acessando propriedade
                    echo $pessoa->mostrarNome(); // Acessando método
                    ?>
                ```

            - **Construtor e destrutor**
                - **Construtores (Constructors)**
                    - Um construtor é um método especial que é chamado automaticamente quando um objeto é instanciado a partir de uma classe. Ele é usado para inicializar as propriedades do objeto ou executar outras tarefas de inicialização necessárias antes de usar o objeto.

                    - Em PHP, o construtor é definido pelo método `__construct()`

                    ```php
                        <?php
                        class Carro {
                            public $marca;
                            public $modelo;

                            public function __construct($marca, $modelo) {
                                $this->marca = $marca;
                                $this->modelo = $modelo;
                                echo "Um novo carro foi criado: $marca $modelo\n";
                            }
                        }

                        // No exemplo acima, o construtor __construct() recebe dois parâmetros $marca e $modelo e os usa para inicializar as propriedades do objeto. Quando um objeto é instanciado a partir dessa classe, o construtor é automaticamente chamado com os argumentos fornecidos.

                        $carro1 = new Carro("Toyota", "Corolla");
                        // Saída: Um novo carro foi criado: Toyota Corolla

                        $carro2 = new Carro("Honda", "Civic");
                        // Saída: Um novo carro foi criado: Honda Civic
                        ?>
                    ```

                - **Destrutores (Destructors)**
                    - Um destrutor é um método especial que é automaticamente chamado quando um objeto é destruído ou quando o script termina sua execução. Ele é usado para realizar tarefas de limpeza, como liberar recursos ou fechar conexões de banco de dados, associadas ao objeto antes que ele seja destruído.

                    - Em PHP, o destrutor é definido pelo método `__destruct()`

                    ```php
                        <?php
                        class Carro {
                            public function __destruct() {
                                echo "O carro foi destruído.\n";
                            }
                        }

                        // No exemplo acima, quando um objeto da classe Carro é destruído (por exemplo, quando não há mais referências a ele no script), o método __destruct() é automaticamente chamado.

                        $carro = new Carro();
                        unset($carro); // Chama o destrutor implicitamente
                        // Saída: O carro foi destruído.
                        ?>
                    ```

                    - É importante observar que, em PHP, o destrutor é chamado automaticamente quando não há mais referências a um objeto ou quando o script termina sua execução. Não é necessário chamar explicitamente o destrutor como em outras linguagens de programação. O exemplo acima usando `unset()` é apenas para fins de demonstração.

            - **Herança**
                - A herança é um conceito importante na POO que permite que uma classe herde propriedades e métodos de outra classe. Isso promove a reutilização de código e a organização hierárquica de classes.

                ```php
                    <?php
                    class Aluno extends Pessoa {
                        // Aluno herda todas as propriedades e métodos de Pessoa
                    }
                    ?>
                ```

            - **Encapsulamento**
                - O encapsulamento é um princípio da POO que envolve o agrupamento de dados e métodos relacionados em uma única unidade (a classe) e o controle do acesso a esses dados e métodos. Isso é geralmente alcançado usando os modificadores de acesso (`public`, `private`, `protected`).

    - **Callable/Callback**
        - 