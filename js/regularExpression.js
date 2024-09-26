//test() : searches a string for a pattern and returns true or false depending on the result.

var patt = /e/;
let v = patt.test("The best things in life are free!");
console.log(v);
//Since there is an "e" in the string, the output will be:true

//exec() : Searches a string for a specified pattern, and return found text as object.
/e/.exec("the best things in life are free!");


/*  
    Brackets are used to find range of characters:
    [abs] : Find any of the character between the brackets.
    [0-9] : Find any of the digits between the brackets.
    (x|y) : Find any of the alternatives seperated with |

    MetaCharacters 
        \d : Find a digit
        \s : Find a whitespace character.
        \b : Find a match at the begining or atleast the end of word.

    Quantifiers define quantities 
        n+ : matches any string that contains atleast one n.
        n* : matches any string that contains zero or more occurences of n.
        n? : matches any string that contains zero or one occurences of n.
 */