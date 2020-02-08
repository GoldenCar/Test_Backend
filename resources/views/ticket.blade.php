<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    
    @font-face {
        font-family: firefly;
        src: {{ storage_path().'/fonts/fireflysung/fireflysung.ttf' }};
    }
    *{
        box-sizing: border-box;
        font-family: firefly;
    }
    .order-info{
        width: 100%;
        border-collapse: collapse;
    }
    table td{
        border: 1px solid gray;
        background-color: #f8f8f8;
        padding-left: 5px;
        padding-right: 5px; 
    }
    .text-right{
        text-align: right;
    }
    table th{
        border: 1px solid gray;
        background-color: #00b050;
        color: white;
    }
    .tbl-info{
        width: 20%;
        float: left;
        height: 180px;
        border-right: 1px solid #ddd;
    }
    .time-info{
        width: 20%;
        float: left;
        height: 180px;
        border-right: 1px solid #ddd;
    }
    .cast-info{
        width: 60%;
        float: right;        
    }
    .enter-info{
        background-color: #ffffcc;
        margin-top: 5px;
        margin-bottom: 5px;
        border: 1px solid #ddd;
        height: 180px;
        position: relative;
    }
    .enter-info::after{
        display: table;
        content: "";
        clear: both;
    }
    h5{
        margin-top: 0px;
        margin-bottom: 0px;
        font-size: 20px;
        text-decoration: underline;
    }
    .item-title{
        width: 90%;
        padding: 3px 10px;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-top: 1px solid #ddd;
        margin-top: -1px;
    }
    .item-val {
        height: 45px;
        text-align: center;
        vertical-align: middle;
        border-bottom: 1px solid #ddd;
    }
    .item-val span{
        padding: 2px 5px;
        background-color: white;
        line-height: 1.4;
    }
    .cast-info .item-title{
        padding: 1px 5px;
    }
    .cast-info .item-title + div {
        min-height: 27px;
        border-bottom: 1px solid #ddd;
        padding-left: 5px;
    }
    .cast-info .item-title + div span{
        padding: 0px 3px;
        background-color: white;
        line-height: 1.4;
    }
    .time-charge{
        position: absolute;
        bottom: 0px;
        width: 40%;
        height: 30px;
        background: #ffffcc;
        border-right: 1px solid #ddd;
        border-left: 1px solid #ddd;
    }
    .time-charge div{
        width: 50%;
        height: 100%;
        margin-top: 0px;
        float: left;
        border-top: 1px solid #ddd;
        border-bottom: none;
    }
    .header::after{
        display: table;
        content: '';
        clear: both;
    }
    .header-name{
        float:left;
    }
    .ticket-no{
        float:right;
        font-size: 20px;
        text-decoration: underline;
    }
    .pdf-wrapper{
        width: 100%;
        max-width: 700px;
        margin: auto;
    }
</style>
</head>
<body>
<div class="pdf-wrapper">
    <?php 
    
        $table_lank = $customers[0]['table_lank'];
        $customers_count = count($customers);
        $table_name = $table['table_name'];
    
    ?>
<div class="header">
    <span class="header-name">[伝票]</span>
    <span class="ticket-no">999999999</span>
</div>
<h5>XXXXXX（お客様名）　様</h5>
<div class="enter-info">
    <div class="tbl-info">
        <div class="info-item">
            <div class="item-title">テーブルNo</div>
            <div class="text-center item-val">
                <span>{{ $table['table_id'] }}</span>
                <br />
                <span>
                    <?php 
                        
                    ?>
                </span>
            </div>
        </div>
        <div class="info-item">
            <div class="item-title">人数</div>
            <div class="text-center  item-val">
                <span>3</span>名
            </div>
        </div>
    </div>
    <div class="time-info">
        <div class="info-item">
            <div class="item-title">入店時間</div>
            <div class="text-center item-val">
                <span>22:00</span>
            </div>
        </div>
        <div class="info-item">
            <div class="item-title">退店時間</div>
            <div class="text-center item-val">
                <span>1:00</span>
            </div>
        </div>
    </div>
    <div class="cast-info">
        <div class="info-item">
            <div class="item-title">本指名</div>
            <div><span>源氏名、源氏名</span></div>
        </div>
        <div class="info-item">
            <div class="item-title">場内指名</div>
            <div><span>源氏名、源氏名</span></div>
        </div>
        <div class="info-item">
            <div class="item-title">同伴</div>
            <div><span>源氏名、源氏名</span></div>
        </div>
    </div>
    <div class="time-charge">
        <div class="item-title">
            Time Charge
        </div>
        <div class="item-val">
        </div>
    </div>
</div>

<table class="order-info">
    <thead>
        <tr>
            <th>品名</th>
            <th>数量</th>
            <th>金額</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>セット料金</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>延長</td>
            <td></td>
            <td></td>
        </tr>



        <tr>
            <td colspan="2" class="text-right">同伴料</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" class="text-right">指名料</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" class="text-right">ＴａｂｌｅＣ</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" class="text-right">小計</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" class="text-right">サービス料（25%）</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" class="text-right">ＴＡＸ（8%）</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" class="text-right">合計</td>
            <td></td>
        </tr>
    </tbody>
</table>
</div>
</body>
</html>