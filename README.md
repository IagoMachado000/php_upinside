# php_upinside
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