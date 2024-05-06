<?php

$list = [];
class A {
    public function __construct($time_start, $time_end)
    {
        $this->time_start = $time_start;
        $this->time_end = $time_end;
    }

    public $time_start = 0;
    public $time_end = 0;
}

$list[] = new A(1,2);
$list[] = new A(3,3);
$list[] = new A(3,4);
$list[] = new A(5,6);
$list[] = new A(8,9);

$res = checkVenueTimeContinuity($list);
print_r($res);

function checkVenueTimeContinuity(array $venueSiteReserveList): array
{
    //以防万一 下标从0开始计算
    $venueSiteReserveList = array_values($venueSiteReserveList);

    $spans = $subSpans = [];
    $beforeEnd = $afterStart = 0;

    foreach ($venueSiteReserveList as $i => $reserve) {

        //第一个直接放进去 并设置beforeEnd
        if ($i == 0) {
            $subSpans[] = $reserve;
            $beforeEnd = $reserve->time_end;
            continue;
        }

        //afterStart一直是当前迭代元素的开始时间
        $afterStart = $reserve->time_start;

        //和前一个结束时间相等的话 则表明是连续的 放到同一个篮子里
        if ($beforeEnd == $afterStart) {
            //连续 则追加
            $subSpans[] = $reserve;
        } else {
            //不连续了 则结束第1个片段的构造 清空暂存片段中的数据
            $spans[] = $subSpans;
            $subSpans = [$reserve];
        }

        //给下一次遍历使用
        $beforeEnd = $reserve->time_end;

        //假如已经是最后一次遍历了 则需要把篮子收起来
        if ($i == count($venueSiteReserveList) - 1) {
            $spans[] = $subSpans;
        }
    }

    return $spans;
}