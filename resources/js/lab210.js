

<html>

<div>

    <a href="javascript:wOpen();">new window</a>
    <a href="javascript:wClose();">close</a>
    <a href="javascript:wFill();">fill</a>
    <a href="javascript:foc();">focus</a>
    <a href="javascript:bl();">blur</a>
    <a href="javascript:width();">width height</a>

</div>

</html>

<script>
    var w;
    //opening new onglet
    // function wOpen(p){
    //     w = open("", "x", p);
    //     //отправить на задний фон
    //     w.blur();
    //     //выбросить окно предупреждения с сообщением test()
    //     alert(test());
    //}
    function test(){return "test it?";}

    //focus window
    function foc(){
    focus();
}

    //blur window
    function bl(){
    blur();
}



    //open new customised window
    function wOpen(){

    var width = (screen.availWidth - 300)/2;
    var height = (screen.availHeight - 200)/2;

    var p = "width=300, height=200, top ="+height+", left=" + width;
    w = open("","name",p);
    w.focus();
}

    //записываем в окно код html
    function wFill(){
    if (w && !w.closed){
    w.focus();
    var html = '<html><head><script type="text/javascript">'+"alert(opener.name)"+"<\/script></head>";
    html+= '<body><p>текст параграфа1</p></body></html>';
    //открываем поток
    w.document.open();
    w.document.write(html);
    w.document.close();
}
}


    //closing new onglet
    function wClose(){
    //if(w) w.close();
    if (w && !w.closed) w.close();
}
</script>
