<?php

//練習問題1
//q1
$name = '下田';
echo '私の名前は「' . $name . '」です。' . "\n";

//q2
$num = 5 * 4;
echo $num . "\n";
echo $num /= 2;

//q3
echo '現在の時刻は' . date('Y年m月d日 H時i分s秒') . 'です' . "\n";

//q4
$age = 20;
if ($age < 20) {
    echo '未成年です' . "\n";
} else {
    echo '成人です' . "\n";
}

//q5
$device = 'windows';
if($device === 'windows' || $device === 'mac') {
    echo '使用osは' . $device . 'です。' . "\n";
} else {
    echo 'どちらでもありません' . "\n";
}

//q6
$kanto = ['東京都', '神奈川県', '栃木県', '千葉県'];
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。' . "\n";

//q7
$location = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach ($location as $key => $value) {
    echo $value . "\n";
}

//q8
foreach ($location as $key => $value) {
    if ($key === '埼玉県') {
        echo $key . 'の県庁所在地は' . $value . 'です。' . "\n";
    }
}

//q9
$location += array(
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市'
);

foreach ($location as $key => $value) {
    if ($key === '愛知県' || $key === '大阪府') {
        echo $key . 'は関東地方ではありません。' . "\n";
    } else {
        echo $key . 'の県庁所在地は' . $value . 'です。' . "\n";
    }
}

//q10
function hello($name)
{
    echo $name . 'さん、こんにちは。' . "\n";
}
hello('下田');
hello('育実');

//q11
function calcTaxInPrice($price)
{
    $taxInPrice = $price * 1.1;
    echo $price . '円の税込み価格は' . $taxInPrice . 'です。' . "\n";
}
calcTaxInPrice(1000);

//q12
function distinguishNum($num)
{
    if ($num % 2 === 0) {
        echo $num . 'は偶数です。' . "\n";
    } else {
        echo $num . 'は奇数です。' . "\n";
    }
}
distinguishNum(44);
distinguishNum(23);

//q13
function evaluateGrade($score)
{
    switch($score) {
        case 'A';
        case 'B';
            echo '合格です。' . "\n";
            break;
        case 'C';
            echo '合格ですが、追加課題があります。' . "\n";
            break;
        case 'D';
            echo '不合格です。' . "\n";
            break;
        default;
            echo '判定不能です、講師に問い合わせてください。' . "\n";
            break;
    }
}
evaluateGrade('A');
evaluateGrade('a');

//練習問題2
//q1
for ($i = 1; $i <= 100; $i++) {
    if (($i % 3 === 0) && ($i % 5 ===　0)) {
        echo 'FizzBuzz' . "\n";
    } elseif ($i % 3 === 0) {
        echo 'Fizz' . "\n";
    } elseif ($i % 5 === 0) {
        echo 'Buzz' . "\n";
    } else {
        echo $i . "\n";
    }
}

//q2-1
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ]
];
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . "です。" . "\n";

//q2-2
foreach ($personalInfos as $key => $value) {
    echo  ($key += 1) . "番目の" . $value['name'] . 'のメールアドレスは' . $value['mail'] . "で、電話番号は" . $value['tel'] . "です。" . "\n";
}

//q2-3
$ageList = [25, 30, 18];
foreach ($personalInfos as $key => $value) {
    $personalInfos[$key]['age'] = $ageList[$key];
}
var_dump($personalInfos);
