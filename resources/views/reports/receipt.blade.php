<div id="invoice-POS">
    <div id="printed_content">
        <center id = "top">
        <div class="logo">GIDEON</div>
        <div class="info"></div>
        <h2>QWESI LTD</h2>
        </center>
    </div>

    <div class="mid">
        <div class="info">
            <h2>Contact Us</h2>
            <p>Address : P.O BOX HP 5373, ABUTIA RD</p>
            <p>Email : gideondadey@gmail.com </p>
            <p>Telephone : +233551550530</p>
        </div>
    </div>

    <div class="bot">
        <div id="table">
            <table>
                <tr class="tabletitle">
                    <td class="item"><h2>Product</h2></td>
                    <td class="Hours"><h2>Amount</h2></td>
                    <td class="Rate"><h2>Price</h2></td>
                    <td class="Rate"><h2>Dis%</h2></td>
                    <td class="Rate"><h2>Total</h2></td>
                </tr>

                @foreach ($order_receipt as $key => $receipt)
                @dd($receipt->quantity)

                <tr class="service">
                    <td class="tableitem"><p class="itemtext">{{ $receipt->product_name ?? 'None'}}</p></td>
                    <td class="tableitem"><p class="itemtext">{{ $receipt->quantity ?? 'None'}}</p></td>
                    <td class="tableitem"><p class="itemtext">{{ number_format($receipt->unitprice, 2) }}</p></td>
                    <td class="tableitem"><p class="itemtext">{{ $receipt->discount ? '' : '0' }}</p></td>
                    <td class="tableitem"><p class="itemtext">{{ number_format($receipt->amount, 2) }}</p></td>
                </tr>

                @endforeach

                <tr class="tabletitle">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="Rate"><p class="itemtext">Tax</p></td>
                    <td class="payment"><p class="itemtext">  </p></td>
                </tr>

                <tr  class="tabletitle">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="Rate">&#8373;Total:</td>
                    <td class="payment"><h2>{{ number_format($order_receipt->sum('amount'), 2) }}</h2></td>
                </tr>
            </table>

            <div class="legalcopy">
                <p class="legal"><strong> ** Thank you for visiting the store **</strong><br>
                    Tax-inclusive products VAT
                </p>
            </div>
        </div>
    </div>
</div>

<style> 
#invoice-POS{
    box-shadow: 0 0 1in -0.25in rgb(52,73,94);
    padding: 2mm;
    margin: 0 auto;
    width: 58mm;
    background: #fff"
}

#invoice-POS::selection{
    background: rgb(52,73,94);
    color: #fff;
}

#invoice-POS ::-moz-selection{
    background: rgb(52,73,94);
    color: #fff;
}

#invoice-POS h1{
    font-size: 1.5em;
    color: #222;
}

#invoice-POS h2{
    font-size: 0.6em;
}

#invoice-POS h3{
    font-size: 1.2em;
    color: #222;
    font-weight: 300;
    line-height: 2em;
}

#invoice-POS p{
    font-size: 0.7em;
    line-height: 1.2em;
    color: #666;
}

#invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot{
    border-bottom: 1px solid #eee;
}

#invoice-POS #top{
    min-height: 100px;
}

#invoice-POS #mid{
    min-height: 80px;
}

#invoice-POS #bot{
    min-height: 50px;
}

#invoice-POS #top .logo{
    height: 60px;
    width: 60px;
    background-image: url() no-repeat;
    background-size: 60px 60px;
    border-radius: 50px;
}

#invoice-POS .info {
    display: block;
    margin-left: 0;
    text-align: left;
}

#invoice-POS .title {
    float: right;
}

#invoice-POS .title p{
    text-align: right;
}

#invoice-POS table {
    width: 100%;
    border-collapse: collapse;
}

#invoice-POS .tabletitle {
    font-size: 0.6em;
    background: #eee;
}

#invoice-POS .service {
    border-bottom: 1px solid #eee;
}

#invoice-POS .item {
    width: 24mm;
}

#invoice-POS .itemtext {
    font-size: 0.6em;
}

#invoice-POS #legalcopy {
    margin-top: 5mm;
    text-align: center;
}

#invoice-POS .info p{
    text-align: center;
}

p.legal {
text-align: center;
}

.serial-number{
margin-top: 5mm;
margin-bottom: 2mm;
text-align: center;
font-size: 12px;
}

.serial{
font-size: 10px;
}
</style>
    