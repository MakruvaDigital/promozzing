var lineItems = function (fields, t) {
    let result = ""
    var l = fields[`${t}-s`].length
    result = fields[`${t}-s`] ?
        fields[`${t}-s`].slice(0, l-1).join(', ') :
        ''
    if (l > 1)
        result += ' dan ' + fields[`${t}-s`][l-1]

    return result
}

function clearWa(no){ return '62'+no.slice(4,-4) }

/* whatsapp/telegram */
window.generateCopy = function (fields, t) {
    if (t == 1) {
        // whatsapp / telegram
        var text = '';

        text = `            
            ${fields["headline"]}
            ${fields["sub_headline"]}
            MEMPERKENALKAN ${fields["nama_produk"]}
            <br/>
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/>').join('')}
            <br/>
            Mengapa Anda harus benar-benar mendapatkan produk ini??<br/>
            ${fields["kelebihan-s"].map(i => '✔ ' + i + '<br/>').join('')}
            <br/>
            Anda pasti sangat ingin ${fields["nama_produk"]} ini kan?
            <br/>
            <br/>
            setelah ini Anda tidak perlu:<br/>
            ${fields["masalah-s"].map(i => '❌ ' + i + '<br/>').join('')}
            <br/>
            Tidak hanya itu, kamu juga bisa mendapatkan FREE GIFT ini:-<br/><br/>
            ${fields["freegift-s"].map(i => '📦 ' + i + '<br/>').join('')}
            <br/>
            <br/>
            Anda masih tidak percaya? Lihat apa yang pengguna katakan ${fields["nama_produk"]} ini:     <br/>
            <br/>
            ${fields["testimoni-s"].map(i => '⭐️⭐️⭐️⭐️⭐️ <br/> ✔ ' + i + '<br/>' + '<br/>').join('')}
            Jangan takut untuk mencoba karena kami GARANSI ${fields["nama_produk"]} Ini dapat memecahkan masalah Anda. Ini adalah jaminan kami: <br/> 
            ${fields["jaminan"]}            <br/>
            <br/>
            Dengan hanya ${fields["harga"]}, Kamu bisa mendapatkannya ${fields["nama_produk"]} ini lho.<br/>
            Jadi tunggu apa lagi? Jika Anda ingin mendapatkan${fields["nama_produk"]} segera hubungi kami:<br/><br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            <br/>
            Atau bisa terus klik link dibawah ini untuk menghubungi staff kami :
            <br/>
            <a href="https://wa.me/${ clearWa(fields['phone']) }">wa.me/${fields['phone']}</a>
            <br/><br/>
            PRODUK KAMI TERBATAS 🔥 🔥 🔥<br/>
        `
        $("#nav-copy1").first().html(text);
        $("#nav-copy1-input").first().val(text);

        text = `            
            Siapa disini yang ada masalah
            <br/><br/>
            ${fields["masalah-s"].map(i => '❌ ' + i + '<br/>').join('')}
            <br/>
            Anda tahu, bahaya dari masalah itu adalah mereka menyebabkan - masukkan apa yang akan terjadi jika mereka tidak mengambil tindakan sekarang-
            <br/><br/>
            Itulah mengapa penting bagi Anda untuk menjaga diri dari semua masalah ini.
            <br/>
            Saya ingin berbagi dengan Anda produk terbaik yaitu ${fields["nama_produk"]}. Saya sudah menggunakannya ${fields["nama_produk"]} saya merasakan hasil yang memuaskan:
            <br/>
            ${fields["kelebihan-s"].map(i => '✔ ' + i + '<br/>').join('')}
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/>' + '<br/>').join('')}
            Bagi kalian yang pertama, saya ingin memberikan FREEGIFT ini untuk kalian :
            <br/><br/>
            ${fields["freegift-s"].map(i => '📦 ' + i + '<br/>').join('')}
            <br/>
            Apa kata mereka yang sudah mencoba produk ini:    <br/>
            <br/>
            ${fields["testimoni-s"].map(i => '⭐️⭐️⭐️⭐️⭐️ <br/>' + i + '<br/>' + '<br/>').join('')}
            <br/>
            Berapa harga ${fields["nama_produk"]} Anda bisa mendapatkannya hanya dengan Rp ${fields["harga"]} SAJA!
            <br/><br/>
            Jadi apa tunggu lagi, dapatkan sekarang 
            <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            <br/>
            Atau bisa terus klik link dibawah ini untuk menghubungi staff kami :
            <br/>
            <a href="https://wa.me/${ clearWa(fields['phone']) }">wa.me/${fields['phone']}</a>
            <br/><br/>
            STOK SANGAT TEBATAS🔥 🔥 🔥<br/>
        `
        $("#nav-copy2").first().html(text);
        $("#nav-copy2-input").first().val(text);

        text = `            
            ${fields["headline"]}
            ${fields["sub_headline"]}
            Tidak LELAH dengan masalah seperti :
            <br/>
            ${fields["masalah-s"].map(i => '❌ ' + i + '<br/>').join('')}
            <br/>
            Saya tahu, tidak mudah menghadapi semua masalah itu, karena saya pernah mengalami situasi yang sama sebelumnya.
            <br/><br/>
            Tapi alhamdulillah, setelah mencoba ${fields["nama_produk"]} semua masalah saya selesai. Luar Biasa!
            <br/><br/>
            Tidak hanya itu, bagi saya ${fields["nama_produk"]} sangat mebantu saya:
            <br/>
            ${fields["kelebihan-s"].map(i => '✔ ' + i + '<br/>').join('')}
            <br/>
            Semua ini saya alami sendiri.
            <br/><br/>
            Maka dari itu saya ingin mengenalkan produk ${fields["nama_produk"]} ini. Jika Anda berminat, saya siap memberikan FREE GIFT ini kepada Anda:
            <br/>
            ${fields["freegift-s"].map(i => '📦 ' + i + '<br/>').join('')}
            <br/>
            Anda tidak perlu khawatir, karena sudah banyak orang yang berhasil menyelesaikan masalahnya dengan ${fields["nama_produk"]} ini. Coba lihat apa yang orang katakan:
            <br/><br/>
            ${fields["testimoni-s"].map(i => '⭐️⭐️⭐️⭐️⭐️ <br/>' + i + '<br/>' + '<br/>').join('')}
            Harga Cuma Rp ${fields["harga"]}
            <br/>
            Jadi bagi anda yang benar-benar tertarik, anda dapat menghubungi saya:
            <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            <br/>
            Atau bisa terus klik link dibawah ini untuk menghubungi staff kami :
            <br/>
            <a href="https://wa.me/${ clearWa(fields['phone']) }">wa.me/${fields['phone']}</a>
            <br/><br/>
            STOK SANGAT TEBATAS🔥 🔥 🔥<br/>
        `
        $("#nav-copy3").first().html(text);
        $("#nav-copy3-input").first().val(text);

        text = `            
            ${fields["testimoni-s"].map(i => i + '<br/>' + '<br/>').join('')}
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/>' + '<br/>').join('')}
            <br/>
            Kenapa anda sangat membutuhkan ${fields["nama_produk"]}?
            <br/>
            ${fields["kelebihan-s"].map(i => '✔ ' + i + '<br/>').join('')}
            <br/>
            ${fields["nama_produk"]} produk ini sangat sesuai untuk anda yang memiliki masalah-masalah:
            <br/>
            <br/>
            ${fields["masalah-s"].map(i => '❌ ' + i + '<br/>').join('')}
            <br/>
            Jika Anda memiliki pertanyaan, hubungi saja tim kami di:
            <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            <br/>
            Atau bisa terus klik link dibawah ini untuk menghubungi staff kami:
            <br/>
            <a href="https://wa.me/${ clearWa(fields['phone'])}">https://wa.me/${fields['phone']}</a>
            <br/>
        `
        $("#nav-copy4").first().html(text);
        $("#nav-copy4-input").first().val(text);

        text = `            
            ${fields["masalah-s"].map(i => i + '?<br/>').join('')}
            <br/>
            Anda pasti pusing karena masalah itu, kan?
            <br/>
            <br/>
            saya ingin tahu apakah Anda benar-benar dapat menyelesaikan semua masalah di atas dengan sangat mudah. Ingin tahu caranya?
            <br/>
            <br/>
            Pastilah dengan ${fields["nama_produk"]}
            <br/>
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/>' + '<br/>').join('')}
            ${fields["nama_produk"]} ini sangat bagus karena
            <br/>
            ${fields["kelebihan-s"].map(i => '✔ ' + i + '<br/>').join('')}
            <br/>
            Anda pasti sangat bersemangat tentang ${fields["nama_produk"]} ini kan?
            <br/>
            <br/>
            Apa yang terbaik, harganya ${fields["nama_produk"]} ini hanya Rp ${fields["harga"]} saja
            <br/>
            <br/>
            Tidak hanya Anda yang bersemangat, pelanggan kami juga sangat bersemangat ketika mereka mendapatkan ${fields["nama_produk"]} ini:
            <br/>
            <br/>
            ${fields["testimoni-s"].map(i => '⭐️⭐️⭐️⭐️⭐️ <br/>' + i + '<br/>' + '<br/>').join('')}
            Jadi tunggu apa lagi, lebih baik buruan dapatkan sekarang juga. Hubungi saya di bawah ini:
            <br/>
            <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            📞 WA ke ${fields["phone"]} <br/>
            <br/>
            Atau bisa terus klik link dibawah ini untuk menghubungi staff kami:
            <br/>
            <a href="https://wa.me/${ clearWa(fields['phone']) }">https://wa.me/${fields['phone']}</a>
            <br/>
        `
        $("#nav-copy5").first().html(text);
        $("#nav-copy5-input").first().val(text);
    } else if (t == 2) {
        /** Facebook */

        var text = '';
        text = `
            Hai kak, belum pernah ngalamin masalah ini: <br/>
            <br/>
            ${fields["masalah-s"].map(i => i + ' ? <br/>').join('')}
            <br/>
            Itu juga yang saya alami sebelumnya. STRES STRES STRES !!! Dimana itu, semua orang di sekitar sibuk menanyakan hal yang sama.<br/>
            <br/>
            Ada saatnya aku menemukan ${fields["nama_produk"]}semua masalah di atas hilang seketika. <br/>
            <br/>
            Tidak hanya itu, ${fields["nama_produk"]} ini ada: <br/>
            <br/>
            ${fields["kelebihan-s"].map(i => i + '<br/>').join('')}
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/>').join('')}
            <br/>
            Mungkin sis bertanya-tanya kan ${fields["nama_produk"]} Ini terbukti ampuh mengatasi masalah sis, kan? Coba lihat apa yang dikatakan pengguna produk ini: <br/>
            <br/>
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            Jangan khawatir, kami sangat ingin membantu Anda menyelesaikan masalah ini, oleh karena itu kami memberikan jaminan kepada Anda:       <br/>
            ${fields["jaminan"]}            <br/>
            <br/>
            Jadi tunggu apa lagi sis, stok tak banyak, dapatkan sekarang. Klik di bawah untuk mendapatkan ${fields["nama_produk"]} ini        <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
            ` 
            + (fields["website"] ? 'Atau layari <br/><br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
            Jangan ragu untuk menghubungi kami karena kami akan memberikan layanan VIP untuk kak!       <br/>
            <br/>
            P/S        <br/>
            <br/>
        `
        $("#nav-copy1").first().html(text);
        
        /* 2 */
        text = `
            Halo gan, apakah agan pernah mengalami masalah ini gan :      <br/>
            <br/>
            ${fields["masalah-s"].map(i => i + ' ? <br/>').join('')}
            <br/>
            Itu juga yang saya alami sebelumnya. STRES STRES STRES !!! Dimana itu, semua orang di sekitar sibuk menanyakan hal yang sama.      <br/>
            <br/>
            Sampai saya menemukan ${fields["nama_produk"]} ini. semua masalah di atas hilang seketika.        <br/>
            <br/>
            Bukan itu saja, ${fields["nama_produk"]} ini ada:        <br/>
            <br/>
            ${fields["kelebihan-s"].map(i => i + '<br/>').join('')}
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/>').join('')}
            <br/>
            Mungkin anda bertanya-tanya ${fields["nama_produk"]} ini Terbukti ampuh dalam menyelesaikan masalah gan, kan? Coba lihat apa yang dikatakan pengguna produk ini:        <br/>
            <br/>
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            Jangan khawatir, kami sangat ingin membantu bro memecahkan masalah ini gan, makanya kami memberikan garansi kepada anda :       <br/>
            ${fields["jaminan"]}            <br/>
            <br/>
            Jadi tunggu apa lagi gan, stoknya tidak banyak, ayo dapatkan sekarang juga. Tekan tombol di bawah untuk mendapatkan ${fields["nama_produk"]} ini        <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
            ` 
            + (fields["website"] ? 'Atau layari <br/><br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
            <br/>
            Jangan ragu untuk menghubungi kami karena kami akan memberikan layanan VIP untuk anda!       <br/>
            <br/>
            P/S        <br/>
            <br/>
        `
        $("#nav-copy2").first().html(text);


        /* 3 */
        
        text = `
            ${fields["headline"]}
            Alhamdulillah tuhan jodohkan saya dengan ${fields["nama_produk"]} ini. Saya dulu punya masalah ` 
            + lineItems(fields, 'masalah') + 
            `. 
            <br/>
            <br/>
            Setelah menggunakan ${fields["nama_produk"]} ini, semua masalah saya terselesaikan.        <br/>
            <br/>
            Mengapa tidak menemukan produk ini dari sebelumnya.       <br/>
            <br/>
            Bukan itu, sekarang saya merasakannya ${lineItems(fields, 'kelebihan')}        <br/>
            <br/>
            Memang produk ini sungguh luar biasa        <br/>
            <br/>
            Saya juga melihat orang lain yang memakainya ${fields["nama_produk"]} ini.         <br/>
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            Apakah anda berminat untuk menyelesaikan masalah yang sama dengan saya?        <br/>
            <br/>
            Klik link dibawah, nanti team saya akan bantu anda       <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
            ` 
            + (fields["website"] ? 'Atau kunjungi <br/><br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
        `
        $("#nav-copy3").first().html(text);

        /* 4 */
        text = `
            Perhatian kepada Anda yang menghadapi masalah ini:      <br/>
            <br/>
            ${fields["masalah-s"].map(i => i + '<br/>').join('')}
            <br/>
            <br/>
            Jangan menunggu lebih lama lagi, ketahuilah bahwa masalah ini akan bertambah parah jika tidak diselesaikan dari awal???<br/>
            <br/>
            Saya tidak ingin menakut-nakuti Anda, tetapi saya ingin membantu Anda mengatasi masalah.<br/>
            <br/>
            Jika Anda berhasil mengatasi masalah ini sejak awal, maka hidup akan lebih tenang, setuju?<br/>
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/><br/>').join('')}
            Apakah Anda ingin saya membagikan produk yang sangat efektif dalam membantu masalah Anda?.<br/>
            <br/>
            MEMPERKENALKAN ${fields["nama_produk"]}<br/>
            <br/>
            ${fields["nama_produk"]} ini ada kelebihan:<br/>
            ${fields["kelebihan-s"].map((e, i) => `&nbsp;&nbsp;&nbsp;&nbsp;${i+1}. ${e}<br/>`).join('')}
            <br/>
            Sekarang kami memberikan HADIAH GRATIS untuk pelanggan paling awal yaitu:<br/>
            <br/>
            ${fields["freegift-s"].map((e, i) => `${i+1}. ${e}<br/>`).join('')}
            <br/>
            Jangan khawatir, kami jamin Anda akan puas dengan ${fields["nama_produk"]} ini. Kalau tidak kami berikan garansi ${fields["jaminan"]}<br/>
            <br/>
            Jadi, hubungi sekarang jika Anda menginginkan HADIAH GRATIS yang kami berikan.<br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
            ` 
            + (fields["website"] ? 'Atau kunjungi <br/><br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
        `
        $("#nav-copy4").first().html(text);

        /* 5 */
        text = `
            ${fields["headline"]}
            ${fields["sub_headline"]}
            MEMPERKENALKAN ${fields["nama_produk"]}  <br/>
            <br/>
            ${fields["penerangan-s"].map(i => i + '<br/>').join('')}
            <br/>
            Kenapa anda sangat membutuhkan produk ini?  <br/>
            <br/>
            ${fields["kelebihan-s"].map(i => i + '<br/>').join('')}
            <br/>
            Pasti anda tertarik dengan ${fields["nama_produk"]} ini kan?  <br/>
            <br/>
            Bagaimana tidak ? dengan produk ini masalah-masalah anda ini akan selesai:  <br/>
            <br/>
            ${fields["masalah-s"].map(i => i + '<br/>').join('')}
            <br/>
            Buka hanya itu, anda juga akan mendapatkan Bonus Spesial dari kami:-  <br/>
            <br/>
            ${fields["freegift-s"].map(i => i + '<br/>').join('')}
            <br/>
            Anda tidak percaya, ini kata pengguna ${fields["nama_produk"]} ini:  <br/>
            <br/>
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            Anda jangan takut, kami juga berikan GARANSI untuk pembelian ${fields["nama_produk"]} ini:  <br/>
            ${fields["jaminan"]}
            <br/>
            <br/>
            Dengan hanya ${fields["harga"]}, anda sudah mendapatkan produk ${fields["nama_produk"]} ini lho !!!  <br/>
            <br/>
            Jadi tunggu apa lagi, segera dapatkan ${fields["nama_produk"]} beserta Bonus Spesialnya, cepat WA:  <br/>
            <br/>
             &nbsp;&nbsp;&nbsp;&nbsp; HUBUNGI KAMI SEGERA  <br/>
            <br/>
            atau anda dapat klik link dibawah ini:  <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
            STOK TERBATAS  <br/>
        `
        $("#nav-copy5").first().html(text);
    } else if (t == 3) {
        /** Facebook Ads */
        var text = '';
        /* 1 */
        text = `
            ${fields["headline"].replace('<br/><br/>', '<br/>',)}
            ${fields["sub_headline"].replace('<br/><br/>', '<br/>',)}
            Sudah, jangan pikirkan lagi masalah-masalah seperti ini ${lineItems(fields, 'masalah'.replace(' dan ', ' atau '))}  <br/>
            Solusinya adalah ${fields["nama_produk"]}  <br/>
            Dengan ${fields["nama_produk"]} anda tidak hanya menyelesaikan masalah diatas. Anda juga akan mendapatkan manfaat ::  <br/>
            <br/>
            ${fields["kelebihan-s"].map((e, i) => `&nbsp;&nbsp;&nbsp;&nbsp;${i+1}. ${e}<br/>`).join('')}
            <br/>
            Masih tak percaya? Lihat apa kata mereka  <br/>
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            ` 
            + (fields["website"] ? 'Jadi segera hubungi kami segera  <br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
            Atau kontak kami dengan klik link dibawah :)  <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
            Stok terbatas, dapatkan sekarang!  <br/>
        `
        $("#nav-copy1").first().html(text);

        /* 2 */
        text = `
            ${fields["masalah-s"].map(i => i + '?<br/>').join('')}
            <br/>
            Mau saya berikan solusi dari masalah-masalah diatas ?  <br/>
            <br/>
            ${fields["nama_produk"]} ini jawapanya!  <br/>
            <br/>
            Dengan produk anda dapat:  <br/>
            <br/>
            ${fields["kelebihan-s"].map(i => i + '<br/>').join('')}
            <br/>
            ` 
            + (fields["website"] ? 'Ingin tau lebih lanjut, klik info dibawah ini  <br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
            Atau hubungi kami :)  <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
        `
        $("#nav-copy2").first().html(text);

        /* 3 */
        text = `
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            Itulah testimoni dari pelanggan setia produk ${fields["nama_produk"]} ini.  <br/>
            <br/>
            Jadi saya juga ingin memperkenalkannya pada anda.   <br/>
            <br/>
            ${fields["nama_produk"]} ini dapat menyelesaikan:  <br/>
            <br/>
            ${fields["masalah-s"].map(i => i + '<br/>').join('')}
            <br/>
            Produk ${fields["nama_produk"]}ini yang terbaik lho!  <br/>
            <br/>
            ` 
            + (fields["website"] ? 'Tunggu apa lagi, klik link untuk info lebih lanjut <br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
            Atau hubungi kmai segera :)  <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
        `
        $("#nav-copy3").first().html(text);

        /* 4 */
        text = `
            Pusingkan dengan masalah-masalah ini ?  <br/>
            <br/>
            ${fields["masalah-s"].map(i => i + '<br/>').join('')}
            <br/>
            Memperkenalkan ${fields["nama_produk"]}!  <br/>
            <br/>
            Dengan ${fields["nama_produk"]} ini masalah anda akan selesai dan hilang.  <br/>
            <br/>
            Banyak orang yang sudah menggunakan. Contohnya  <br/>
            <br/>
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            ` 
            + (fields["website"] ? 'Tunggu apa lagi, klik link untuk info lebih lanjut <br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
            Atau hubungi kmai segera :)  <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
        `
        $("#nav-copy4").first().html(text);

        /* 5 */
        var masalah = lineItems(fields, 'masalah')
        var m_li = masalah.indexOf(', ') >= 0 ? masalah.split(', ', 2) : (masalah.indexOf(' dan ') >= 0 ? masalah.split(' dan ', 2) : [masalah])
        text = `
            ${fields["headline"].replace('<br/><br/>', '<br/>',)}
            ${fields["sub_headline"]}
            WOWW!! Pasti anda ingin masalah anda ${m_li[0]} selesai kan?  <br/>
            <br/>
            Tau tidak masalah itu juga dapat menimbulkan masalah lainnya? Produk ${fields["nama_produk"]} inilah solusinya!  <br/>
            ${fields["nama_produk"]} juga banyak manfaatnya:  <br/>
            <br/>
            ${fields["kelebihan-s"].map(i => i + '<br/>').join('')}
            <br/>
            Jadi anda pasti senang masalah anda teratasi segera !!  <br/>
            ` 
            + (fields["website"] ? 'Tunggu apa lagi, klik link untuk info lebih lanjut <br/>' + fields["website"].concat('<br/>').repeat(3) + '<br/>' : '') + 
            `
            Atau hubungi kmai segera :)  <br/>
            <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            Wa.me/${fields["phone"]} <br/>
            <br/>
            <br/>
        `
        $("#nav-copy5").first().html(text);
    } else if (t == 4) {
        /** Facebook Ads */
        var text = '';
        /* 1 */
        text = `
            💥Perhatian bagi anda yang memiliki masalah ini 💥 <br/>
            <br/>
            ${fields['masalah-s'].map(i =>  '❌' + i + ' ? <br/>').join('')}
            <br/>
            Itu juga yang saya alami sebelumnya. STRES STRES STRES !!! Dimana itu, semua orang di sekitar sibuk menanyakan hal yang sama.     <br/>
            <br/>
            Sampai saya menemukan ${fields["nama_produk"]} ini. Semua masalah diatas hilang seketika.   <br/>
            <br/>
            Bukan itu saja, ${fields["nama_produk"]} ini juga bermanfaat:  <br/>
            <br/>
            ${fields['kelebihan-s'].map(i => '✔' + i + '<br/>').join('')}
            <br/>
            ${fields['penerangan-s'].map(i => i + '<br/>').join('')}
            <br/>
            Mungkin anda bertanya-tanya tentang ${fields["nama_produk"]} ini. Tenang produk ini sudah TERBUKTI:<br/>
            <br/>
            ${fields["testimoni-s"].map(i => '⭐️⭐️⭐️⭐️⭐️ <br/>' + i + '<br/><br/>').join('')}
            Jangan khawatir, kami sangat ingin membantu kak menyelesaikan masalah ini, makanya kami memberikan garansi kepada kak:<br/>
            ${fields["jaminan"]}
            <br/>
            <br/>
            Jadi tunggu apa lagi , stok terbatas, dapatkan sekarang. Klik link di bio<br/>
            untuk dapatkan ${fields["nama_produk"]} ni<br/>
            <br/>
            @username   <br/>
            @username   <br/>
            @username   <br/>
            <br/>
            Jangan ragu untuk hubungi kami segera<br/>
            <br/>
            p/s: ${fields["ps"]}
        `
        $("#nav-copy1").first().html(text);
        
        /* 2 */
        text = `
            🔥STRESSS, kalau ada masalah begini🔥<br/>
            <br/>
            ${fields['masalah-s'].map(i => '❌' + i + ' ? <br/>').join('')}
            <br/>
            Itulah yang saya alami. STRESS STRESS STRESS!!! Dimana itu, semua orang di sekitar sibuk menanyakan hal yang sama.<br/>
            <br/>
            Sampailah saya bertemu dengan ${fields["nama_produk"]} ini. Semua masalah selesai seketika.<br/>
            <br/>
            Tidak hanya itu, produk ${fields["nama_produk"]} ini ada banyak manfaatnya:<br/>
            <br/>
            ${fields['kelebihan-s'].map(i => '✔' + i + '<br/>').join('')}
            <br/>
            ${fields['penerangan-s'].map(i => i + '<br/>').join('')}
            <br/>
            D<br/>
            Jadi tunggu apa lagi , stok terbatas, dapatkan sekarang. Klik link di bio<br/>
            untuk dapatkan ${fields["nama_produk"]} ni<br/>
            <br/>
            @username   <br/>
            @username   <br/>
            @username   <br/>
            <br/>
            Jangan ragu untuk hubungi kami segera<br/>
            <br/>
            p/s: ${fields["ps"]}
        `

        $("#nav-copy2").first().html(text);
        
        /* 3 */
        text = `
            ${fields["headline"]}
            ⭐⭐⭐⭐⭐<br/>
            Alhamdulillah saya bertemu produk ${fields["nama_produk"]} ini. Dulu saya punya msalah ${lineItems(fields, 'masalah')}.<br/>
            <br/>
            Setelah menggunakan ${fields["nama_produk"]} ini, semua masalah itu hilang.<br/>
            <br/>
            Kok bisa ? Saya baru tau produk ini sekarang.<br/>
            <br/>
            Tidak hanya itu saya juga merasakan manfaat ${lineItems(fields, 'kelebihan')}<br/>
            <br/>
            Produk ini sangatlah luar biasa.<br/>
            <br/>
            <br/>
            Pasti anda inginkan menyelesaikan masalah seperti saya ini?<br/>
            <br/>
            Jadi tunggu apa lagi , stok terbatas, dapatkan sekarang. Klik link di bio<br/>
            untuk dapatkan ${fields["nama_produk"]} ni<br/>
            <br/>
            @username   <br/>
            @username   <br/>
            @username   <br/>
            <br/>
            p/s: ${fields["ps"]}
        `

        $("#nav-copy3").first().html(text);
        
        /* 4 */
        text = `
            💢ANDA BERUNTUNG HARI INI💢<br/>
            <br/>
            Apakah anda tau banyak orang mengahdapi masalah ini:<br/>
            ${fields['masalah-s'].map(i => '❌' + i + ' ? <br/>').join('')}
            <br/>
            Jangan menunggu lebih lama lagi, ketahuilah bahwa masalah ini akan bertambah parah jika tidak diselesaikan dari awal???<br/>
            <br/>
            Saya tidak ingin menakut-nakuti Anda, tetapi saya ingin membantu Anda mengatasi masalah.<br/>
            <br/>
            Jika Anda berhasil mengatasi masalah ini pasti anda lebih bagahia kan?<br/>
            <br/>
            ${fields['penerangan-s'].map(i => i + ' <br/><br/>').join('')}
            Saya berikan informasi KHUSUS untuk anda<br/>
            <br/>
            MEMPERKENALKAN ${fields["nama_produk"]}<br/>
            <br/>
            ${fields["nama_produk"]} ini memiliki kelebihan:<br/>
            ${fields['kelebihan-s'].map(i => '✔' + i + '<br/>').join('')}
            <br/>
            Kami juga berikan Bonus Spesial<br/>
            <br/>
            ${fields["freegift-s"].map((e, i) => `${i+1}. ${e}<br/>`).join('')}
            <br/>
            Tenang, kami berikan GARANSI untuk pembelian ${fields["nama_produk"]} ini. <br/>
            ${fields["jaminan"]}
            <br/>
            Hubungi kami segera dan dapatkan Bonus Spesial.<br/>
            <br/>
            Klik link di bio sekarang:<br/>
            <br/>
            @username   <br/>
            @username   <br/>
            @username   <br/>
            <br/>
            p/s: ${fields["ps"]}
        `

        $("#nav-copy4").first().html(text);
        
        /* 5 */
        text = `
            ${fields["headline"]}
            ${fields["sub_headline"]}
            MEMPERKENALKAN ${fields["nama_produk"]}<br/>
            <br/>
            ${fields['penerangan-s'].map(i => i + ' <br/>').join('')}
            <br/>
            Kenapa anda harus mencoba produk ini?<br/>
            <br/>
            ${fields['kelebihan-s'].map(i => '✔' + i + '<br/>').join('')}
            <br/>
            <br/>
            Passti anda sangat penasaran dengan ${fields["nama_produk"]} ini kan?<br/>
            <br/>
            Dengan produk ini, masalah-masalah anda kan terselesaikan:<br/>
            <br/>
            ${fields['masalah-s'].map(i => '❌' + i + ' ? <br/>').join('')}
            <br/>
            <br/>
            Tidak hanya itu, anda juga mendapatkan Bonus Spesial dari kami:-<br/>
            <br/>
            ${fields["freegift-s"].map(i => i + '<br/>').join('')}
            <br/>
            Lihat kata pengguna dari produk ${fields["nama_produk"]} kami ini:<br/>
            <br/>
            ${fields["testimoni-s"].map(i => i + '<br/>').join('')}
            <br/>
            Kmai berikan GARANSI untuk pembelian produk ${fields["nama_produk"]} ini :<br/>
            ${fields["jaminan"]}
            <br/>
            <br/>
            Dengan hanya ${fields["harga"]}, anda sudah mendapatkan produk ${fields["nama_produk"]} ini.<br/>
            <br/>
            Jadi tunggu apa lagi segera dapatkan ${fields["nama_produk"]} klik link bio untuk dapatkan BONUS SPESIAL:<br/>
            <br/>
            @username   <br/>
            @username   <br/>
            @username   <br/>
            <br/>
            <br/>
            <br/>
            STOK TERBATAS<br/>
            <br/>
            p/s: ${fields["ps"]}

        `
        $("#nav-copy5").first().html(text);
    }
}


$(document).ready(function () {

    function copy_text(e) {
        var cur_tab = document.getElementsByClassName('tab-pane fade show active')[0];

        var r = document.createRange();
        r.selectNode(cur_tab);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();

        swal("Good job!", "Data copied to clipboard!", "success");

    }

    document.getElementById('copy_btn').addEventListener('click', function (e) {
        copy_text(e);

        $.post('/copywriting/countsCopiedCopywriting', JSON.stringify({type: $('.nav-link.active[data-toggle=tab]')[0].href.slice(-1)}), function(res){console.log( JSON.parse(res) )}, 'json')
    });

});