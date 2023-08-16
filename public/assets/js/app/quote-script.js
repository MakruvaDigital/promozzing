var author;
var quote;

var quoteList = [];
var isGroupSelected = false

function generate(){
    var quotes = daftar_quote;

    var index = Math.floor(Math.random() * quotes.length)
    author = quotes[index][0];
    quote = quotes[index][1];

    document.getElementById("quote").innerHTML = quote;
    document.getElementById("author").innerHTML = author;

    var yes=quote+" -"+author;
    document.getElementById("quote_generate").value = yes;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //Okay
            console.log("done");
        }
    };

    if (isGroupSelected) {
        quoteList.push({
            quote: quote,
            author: author
        })
    }
    if( quoteList.length>1 && isGroupSelected ) {
        $("#back").show();
    }

    quoteListIndex = 2
}

$(".my-quote-btn").click(()=>{
    if (!isGroupSelected) isGroupSelected = true;
    generate()
})

var quoteListIndex = 2;
$('#back').click(()=>{
    quote = quoteList[ quoteList.length - quoteListIndex ]
    if (quote == undefined) return false;
    
    document.getElementById("quote").innerHTML = quote.quote;
    document.getElementById("author").innerHTML = quote.author;
    document.getElementById("quote_generate").value = quote.quote+" -"+quote.author;

    quoteListIndex++
})

function copyFunc() {
	
	var linkToGo = quote + ' ' + author;
	
	if (typeof(navigator.clipboard)=='undefined') {
		console.log('navigator.clipboard');
		var textArea = document.createElement("textarea");
		textArea.value = linkToGo;
		textArea.style.position="fixed";  //avoid scrolling to bottom
		document.body.appendChild(textArea);
		textArea.focus();
		textArea.select();
	
		try {
			var successful = document.execCommand('copy');
			var msg = successful ? 'successful' : 'unsuccessful';
			toastr.info(msg); 
			alert("Copied the text: " + copyText.value);
		} catch (err) {
			toastr.warning('Was not possible to copy te text: ', err);
		}
	
	alert("Copied the text: " + copyText.value);        
		
	}
	else
	{
 		navigator.clipboard.writeText(linkToGo);
	}
    var str=document.getElementById("quote_generate").value;

    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("done");
            }
        };

}