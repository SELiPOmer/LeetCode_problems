class Solution {

    /**
     * @param Integer[][] $questions
     * @return Integer
     */
    function mostPoints($questions) {
        $ans = array_column($questions,0);
        for ($i = count($ans)-1;$i>=0;$i--){
            $ans[$i] = max($ans[$i]+$ans[$questions[$i][1]+$i+1],$ans[$i+1]);
        }
        return $ans[0];
    }
}
