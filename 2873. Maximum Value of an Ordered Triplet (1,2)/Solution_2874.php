class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumTripletValue($nums) {
        $n = count($nums);
        $max = 0;
        if ($n < 3) return 0;
        
        $kmax[$n-1]=$nums[$n-1];
        for ($k = ($n-1);$k>1;$k--){
            $kmax[$k-1] = max($kmax[$k],$nums[$k]);
        }

        $i_max = $nums[0];
        for ($j = 1;$j<($n-1);$j++){
            $i_max = max($i_max,$nums[$j-1]);
            $max  = max($max, ($i_max-$nums[$j])*$kmax[$j]);  
        }
        
        return $max;
    }
}
