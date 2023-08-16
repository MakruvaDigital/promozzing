let input1 = 'Muka Anda Berjerawat';
let input2 = 'Beli Kosmetik Mahal';
let input3 = 'Kurang 1 bulan';

let input4 = 'TINGKATKAN ENGGAGEMENT IKLAN ANDA ';
let input5 = 'BAYAR SEMINAR MAHAL';
let input6 = 'KURANG 5 MENIT';

let input7 = 'HAPUSKAN HUTANG ANDA';
let input8 = '5 TAHUN';
let input9 = 'GAJI UMR';

let input10 = 'IGIN SUKSES BERBISNIS';
let input11 = 'JACK MA';
let input12 = 'KELUAR MODAL BESAR';

let input13 = 'IGIN SUKSES BERBISNIS';
let input14 = 'SUKSES DI USIA MUDA';
let input15 = 'KOPI DIET DEPOK';


let i = 0;
update1();
update2();
update3();
update4();
update5();
var islowercase = false;




//1
$('input#input1').keyup(function(event) {
	input1 = $('input#input1').val();
	update1();
});
$('input#input2').keyup(function(event) {
	input2 = $('input#input2').val();
	update1();
});
$('input#input3').keyup(function(event) {
	input3 = $('input#input3').val();
	update1();
});

//2
$('input#input4').keyup(function(event) {
	input4 = $('input#input4').val();
	update2();
});
$('input#input5').keyup(function(event) {
	input5 = $('input#input5').val();
	update2();
});
$('input#input6').keyup(function(event) {
	input6 = $('input#input6').val();
	update2();
});

//3
$('input#input7').keyup(function(event) {
	input7 = $('input#input7').val();
	update3();
});
$('input#input8').keyup(function(event) {
	input8 = $('input#input8').val();
	update3();
});
$('input#input9').keyup(function(event) {
	input9 = $('input#input9').val();
	update3();
});


//4
$('input#input10').keyup(function(event) {
	input10 = $('input#input10').val();
	update4();
});
$('input#input11').keyup(function(event) {
	input11 = $('input#input11').val();
	update4();
});
$('input#input12').keyup(function(event) {
	input12 = $('input#input12').val().toLowerCase();
	update4();
});


//5
$('input#input13').keyup(function(event) {
	input13 = $('input#input13').val();
	update5();
});
$('input#input14').keyup(function(event) {
	input14 = $('input#input14').val();
	update5();
});
$('input#input15').keyup(function(event) {
	input15 = $('input#input15').val().toLowerCase();
	update5();
});



$('textarea').css('text-transform', 'uppercase');
$('input').css('text-transform', 'uppercase');
$('button.change').html("To Lowercase");

function update1() {
	$('div.head-container1').html('<textArea  rows="3"  class="form-control textarea11">Rahsia hindari '+input1+' tanpa harus '+input2+' kurang dari '+input3+'</textArea><button class="btn btn11 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3"  class="form-control textarea12">Cara menhilangkan '+input1+' tanpa harus '+input2+' kurang dari '+input3+' </textArea><button class="btn btn12 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3" class="form-control textarea13">SAMPAI KAPAN ANDA INGIN MASALAH '+input1+' MENGHANCURKAN HIDUP ANDA? SEBENARNYA, ANDA TIDAK PERLU '+input2+' JIKA MASALAH INI BISA DISELESAIKAN.</textArea><button class="btn btn13 btn-secondary" style="float:right">Copy</button> <br><br>');
	$("button.btn").click(function(event) {
		switch ($(this)[0]) {
			case $("button.btn11")[0]:
				copyToClipboard($('textArea.textarea11')[0]);
				break;
			case $("button.btn12")[0]:
				copyToClipboard($('textArea.textarea12')[0]);
				break;
			case $("button.btn13")[0]:
				copyToClipboard($('textArea.textarea13')[0]);
				break;
			default:
				break;
		}
	});
	adjustCase()
}

function update2() {
	$('div.head-container2').html('<textArea  rows="3"  class="form-control textarea21">Cara '+input4+' TANPA HARUS '+input5+' KURANG DARI '+input6+'</textArea><button class="btn btn21 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3"  class="form-control textarea22">SIAPA DISINI YANG MAU SAYA BONGKAR CARA '+input4+' WALAU TIDAK '+input5+' </textArea><button class="btn btn22 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3" class="form-control textarea23">RAHASIA '+input4+' TANPA HARUS '+input5+' </textArea><button class="btn btn23 btn-secondary" style="float:right">Copy</button> <br><br>');
	$("button.btn").click(function(event) {
		switch ($(this)[0]) {
			case $("button.btn21")[0]:
				copyToClipboard($('textArea.textarea21')[0]);
			case $("button.btn22")[0]:
				copyToClipboard($('textArea.textarea22')[0]);
			case $("button.btn23")[0]:
				copyToClipboard($('textArea.textarea23')[0]);
				break;
			default:
				break;
		}
	});
	adjustCase()
}

function update3() {
	$('div.head-container3').html('<textArea  rows="3"  class="form-control textarea31">'+input7+' dalam waktu '+input8+' walaupun hanya dengan '+input9+'	</textArea><button class="btn btn31 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3"  class="form-control textarea32">Bagaimana cara untuk '+input7+' dalam waktu '+input8+' walaupun '+input9+' </textArea><button class="btn btn32 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3" class="form-control textarea33">Dengan '+input9+' tapi anda dapat '+input7+' dalam waktu '+input8+'. Bagaimana?</textArea><button class="btn btn33 btn-secondary" style="float:right">Copy</button> <br><br>');
	$("button.btn").click(function(event) {
		switch ($(this)[0]) {
			case $("button.btn31")[0]:
				copyToClipboard($('textArea.textarea31')[0]);
				break;
			case $("button.btn32")[0]:
				copyToClipboard($('textArea.textarea32')[0]);
				break;
			case $("button.btn33")[0]:
				copyToClipboard($('textArea.textarea33')[0]);
				break;
			default:
				break;
		}
	});
	adjustCase()
}	

function update4() {
	$('div.head-container4').html('<textArea  rows="3"  class="form-control textarea41">Capai '+input10+' seperti '+input11+' tanpa PERLU '+input12+'.</textArea><button class="btn btn41 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3"  class="form-control textarea42">Apakah anda berfikir kalau ingin '+input10+' seperti '+input11+' harus '+input12+'?</textArea><button class="btn btn42 btn-secondary" style="float:right">Copy</button> <br><br> <textArea  rows="3" class="form-control textarea43">APAKAH Perlu '+input12+' untuk ingin '+input10+' seperti '+input11+'?</textArea><button class="btn btn43 btn-secondary" style="float:right">Copy</button> <br><br>');
	$("button.btn").click(function(event) {
		switch ($(this)[0]) {
			case $("button.btn41")[0]:
				copyToClipboard($('textArea.textarea41')[0]);
				break;
			case $("button.btn42")[0]:
				copyToClipboard($('textArea.textarea42')[0]);
				break;
			case $("button.btn43")[0]:
				copyToClipboard($('textArea.textarea43')[0]);
				break;
			default:
				break;
		}
	});
	adjustCase()
}

function update5() {
	$('div.head-container5').html('<textArea  rows="1"  class="form-control textarea44"> MAU TIDAK SAYA BANTU MASALAH ANDA  '+input13+' </textArea><button class="btn btn44 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea45"> MASIH  '+input13+' </textArea><button class="btn btn45 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea46"> BERITA BAIK UNTUK MEREKA YANG  '+input13+'</textArea><button class="btn btn46 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea47"> ANDA SEDAR TAK YANG ANDA '+input13+' </textArea><button class="btn btn47 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea48"> DENGAR SINI KALAU ANDA ADA MASALAH  '+input13+' </textArea><button class="btn btn48 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea49"> APA KELUARGA ANDA AKAN KATA JIKA ANDA '+input13+' </textArea><button class="btn btn49 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea50"> RAHSIA BAGAIMANA   '+input14+' </textArea><button class="btn btn50 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea51"> TERBONGKAR!  '+input14+' </textArea><button class="btn btn51 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea52"> FORMULA '+input14+'</textArea><button class="btn btn52 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea53"> TELAH DICIPTA!  '+input14+' </textArea><button class="btn btn53 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea54"> BAGAIMANA '+input15+' MEMBANTU '+input14+' </textArea><button class="btn btn54 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea55"> TERBONGKAR! FORMULA YANG BUATKAN  '+input14+' </textArea><button class="btn btn55 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea56"> NAK TAHU BAGAIMANA CARA '+input14+'? </textArea><button class="btn btn56 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea57"> NAK TAK KAMI TOLONG ANDA '+input14+'? </textArea><button class="btn btn57 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea58"> NAK TAHU CARA BAGAIMANA '+input14+' DENGAN MUDAH?</textArea><button class="btn btn58 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea59"> BERAPA BANYAK ANDA SANGGUP UNTUK '+input14+'?</textArea><button class="btn btn59 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea60"> BILAKAH KALI TERAKHIR ANDA '+input14+'?</textArea><button class="btn btn60 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea61"> ANDA BELUM TERLAMBAT UNTUK '+input14+'</textArea><button class="btn btn61 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea62"> SERIUS! APA YANG SAYA BAKAL DEDAHKAN INI BAKAL '+input14+'</textArea><button class="btn btn62 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea63"> BAYANGKAN ANDA MAMPU '+input14+' HANYA DENGAN '+input15+'</textArea><button class="btn btn63 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea64"> TERGEMPAR! INILAH RAHSIA TERBESAR YANG SERING DIGUNAKAN UNTUK '+input14+'</textArea><button class="btn btn64 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea65"> AGEN WANTED! NAK TAK SAYA TUNJUKKAN CARA YANG MUDAH HASILKAN  '+input14+'</textArea><button class="btn btn65 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea66"> ANDA TAK SERIK KE SERING DITIPU UNTUK '+input14+'</textArea><button class="btn btn66 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea67"> TERCARI-CARI '+input15+'? </textArea><button class="btn btn67 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea68">  TERBARU!  '+input15+' </textArea><button class="btn btn68 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea69"> TERCARI-CARI '+input15+' DILANCARKAN! </textArea><button class="btn btn69 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea70"> SOON! '+input15+' BAKAL DILANCARKAN! </textArea><button class="btn btn70 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea71"> NEW ARRIVAL! '+input15+' PERTAMA DI MALAYSIA </textArea><button class="btn btn71 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea72">  '+input15+' KINI DILANCARKAN! </textArea><button class="btn btn72 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea73"> EKSKLUSIF! SATU-SATUNYA  '+input15+' </textArea><button class="btn btn73 btn-secondary mb-3" style="float:right">Copy</button><textArea  rows="1"  class="form-control textarea74"> KINI DIBUKA! '+input15+' </textArea><button class="btn btn74 btn-secondary mb-3" style="float:right">Copy</button>');
	for (let i = 44; i <= 74; i++) {
		$('button.btn'+i).click(function(){
			copyToClipboard($('textArea.textarea'+i)[0]);
		})
	}
	adjustCase()
}


$('button.change').click(function(event) {
	
		if(islowercase){
			$('button.change').html("To Lowercase");
			$('textarea').css('text-transform', 'uppercase');
			$('input').css('text-transform', 'uppercase');
			islowercase = false;
		}else{
			$('button.change').html("To Uppercase");
			$('textarea').css('text-transform', 'lowercase');
			$('input').css('text-transform', 'lowercase');
			islowercase = true;
		}

});

function adjustCase(){
	if(!islowercase){
		$('textarea').css('text-transform', 'uppercase');
		$('input').css('text-transform', 'uppercase');
	}else{
		$('textarea').css('text-transform', 'lowercase');
		$('input').css('text-transform', 'lowercase');
	}
}


function copyToClipboard(elem) {
	// create hidden text element, if it doesn't already exist
	var targetId = "_hiddenCopyText_";
	var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
	var origSelectionStart, origSelectionEnd;
	if (isInput) {
		// can just use the original source element for the selection and copy
		target = elem;
		origSelectionStart = elem.selectionStart;
		origSelectionEnd = elem.selectionEnd;
	} else {
		// must use a temporary form element for the selection and copy
		target = document.getElementById(targetId);
		if (!target) {
			var target = document.createElement("textarea");
			target.style.position = "absolute";
			target.style.left = "-9999px";
			target.style.top = "0";
			target.id = targetId;
			document.body.appendChild(target);
		}
		target.textContent = elem.textContent;

	}
	// select the content
	var currentFocus = document.activeElement;
	target.focus();
	target.setSelectionRange(0, target.value.length);

	// copy the selection
	var succeed;
	try {
		succeed = document.execCommand("copy");
	} catch(e) {
		succeed = false;
	}
	// restore original focus
	if (currentFocus && typeof currentFocus.focus === "function") {
		currentFocus.focus();
	}

	if (isInput) {
		// restore prior selection
		elem.setSelectionRange(origSelectionStart, origSelectionEnd);
	} else {
		// clear temporary content
		target.textContent = "";
	}

	//peringantan telah terkopi
	swal.fire('Headline copied to clipboard')
	//kirim ke db
	var headlineType = $('.headlineType.active').data('type');
	$.post('/headline/addHeadline', JSON.stringify({ 
		headline_text: islowercase ? target.value.toLocaleLowerCase() : target.value.toLocaleUpperCase(),
		type: headlineType
	 }), function(res){

		if( JSON.parse(res) ){
			$.post('/headline/countsCopiedHeadlines', JSON.stringify({type: headlineType}), function(res){

			}, 'json' )
		}

	}, 'json' )


	return succeed;
}
