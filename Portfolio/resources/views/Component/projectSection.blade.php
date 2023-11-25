<div class="backgroundColor">
    <h1>Calculator</h1>
<div class="card">
    <div class="calc-head" id = "project">
        <input type="text" id="result" maxlength="10" placeholder="0">
    </div>

    <div class="calc-body">
        <div>
            <input type="button" class="btn" value="C" onclick="clearResult()">
            <input type="button" class="btn" value="+/-" onclick="insertNumber('')">
            <input type="button" class="btn" value="%" onclick="insertNumber('%')">
            <input type="button" class="btn btn-style" value="/" onclick="insertNumber('/')">
        </div>

        <div>
            <input type="button" class="btn" value="7" onclick="insertNumber(7)">
            <input type="button" class="btn" value="8" onclick="insertNumber(8)">
            <input type="button" class="btn" value="9" onclick="insertNumber(9)">
            <input type="button" class="btn btn-style" value="X" onclick="insertNumber('*')">
        </div>

        <div>
            <input type="button" class="btn" value="4" onclick="insertNumber(4)">
            <input type="button" class="btn" value="5" onclick="insertNumber(5)">
            <input type="button" class="btn" value="6" onclick="insertNumber(6)">
            <input type="button" class="btn btn-style" value="-" onclick="insertNumber('-')">
        </div>

        <div>
            <input type="button" class="btn" value="1" onclick="insertNumber(1)">
            <input type="button" class="btn" value="2" onclick="insertNumber(2)">
            <input type="button" class="btn" value="3" onclick="insertNumber(3)">
            <input type="button" class="btn btn-style" value="+" onclick="insertNumber('+')">
        </div>

        <div>
            <input type="button" class="btn" value="0" onclick="insertNumber(0)">
            <input type="button" class="btn" value="." onclick="insertNumber('.')">
            <input type="button" class="btn" value="DEL" onclick="deleteNumber()">
            <input type="button" class="btn inlineCSS" value="=" onclick="calculateResult()">
        </div>
    </div>
</div>

</div>
