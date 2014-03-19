// this script executes when click on upload images link
function uploadImage() {
        $("#forum_image").click();
        return false;
}
function clearImage() {
        $('.preview').remove();
        $('#real_thumb').val('');
        return false;
}
// this script for collecting the form data and pass to the controller action and doing the on success validations
function send(){
    var formData = new FormData($("#pages-form")[0]);
    //console.log(formData);
    $.ajax({
        url: '/pages/uploadThumb',
        type: 'POST',
        data: formData,
        datatype:'json',
        // async: false,
        beforeSend: function() {
            // do some loading options
        },
        success: function (data) {
            $('.preview').remove();
            $('#real_thumb').val(data);
            $('#forum_image').after('<img style="margin: 0px 20px 0px 0px;" class="preview" src="/images/'+data+'" width="80" />');
        },
 
        complete: function() {
            // success alerts
        },
 
        error: function (data) {
            alert("При загрузке изображения произошел сбой. Попробуйте еще раз через несколько минут.");
            console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
 
    return false;
}

function JSfunc()
{
    /* Making transliteration! */
    this.strTranslit = function(el)
    {
        new_el = document.getElementById('Seo_alias');
        A = new Array();
        A["Ё"]="YO";A["Й"]="I";A["Ц"]="TS";A["У"]="U";A["К"]="K";A["Е"]="E";A["Н"]="N";A["Г"]="G";A["Ш"]="SH";A["Щ"]="SCH";A["З"]="Z";A["Х"]="H";A["Ъ"]="";
        A["ё"]="yo";A["й"]="i";A["ц"]="ts";A["у"]="u";A["к"]="k";A["е"]="e";A["н"]="n";A["г"]="g";A["ш"]="sh";A["щ"]="sch";A["з"]="z";A["х"]="h";A["ъ"]="";
        A["Ф"]="F";A["Ы"]="I";A["В"]="V";A["А"]="A";A["П"]="P";A["Р"]="R";A["О"]="O";A["Л"]="L";A["Д"]="D";A["Ж"]="ZH";A["Э"]="E";
        A["ф"]="f";A["ы"]="i";A["в"]="v";A["а"]="a";A["п"]="p";A["р"]="r";A["о"]="o";A["л"]="l";A["д"]="d";A["ж"]="zh";A["э"]="e";
        A["Я"]="YA";A["Ч"]="CH";A["С"]="S";A["М"]="M";A["И"]="I";A["Т"]="T";A["Ь"]="";A["Б"]="B";A["Ю"]="YU";
        A["я"]="ya";A["ч"]="ch";A["с"]="s";A["м"]="m";A["и"]="i";A["т"]="t";A["ь"]="";A["б"]="b";A["ю"]="yu";A[" "]="_";A["("]="";A[")"]="";A["["]="";A["]"]="";A["{"]="";A["}"]="";A["%"]="";A["*"]="";A["&"]="";A["$"]="";A["#"]="";A["@"]="";A[","]="";A["."]="";A["?"]="";A["!"]="";A["^"]="";A["/"]="";A["\\"]="";A["|"]="";A[":"]="";A[";"]="";A['"']="";A["'"]="";
        new_el.value = el.value.replace(/([\u0410-\u0451 ()\[\]*&%$#@{}!^.,?\\\/;:\'\"\|])/g,
            function (str,p1,offset,s) {
                if (A[str] != 'undefined'){return A[str];}
            }
        ).toLowerCase();
    }
    /* Normalizes a string, eю => eyu */
    this.strNormalize = function(el)
    {
        if (!el) { return; }
        this.strTranslit(el);
    }
}
var oJS = new JSfunc();