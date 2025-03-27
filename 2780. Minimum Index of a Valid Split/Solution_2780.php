class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumIndex($nums) {
        
        $num = max(array_count_values($nums));
        $dom = array_search($num,array_count_values($nums));
        $temp = 0;
        $j=0;
        while($j<(count($nums))){  
               
            $temp += ($nums[$j]==$dom);

            if (($temp>(($j-$i+1)/2))&(($num-$temp)>(((count($nums)-1)-$j)/2))){
                return($j);
            }
            $j++;

        }
        return -1;
    }
}
