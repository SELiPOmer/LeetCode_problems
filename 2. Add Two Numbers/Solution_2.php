/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
  
    function addTwoNumbers($l1, $l2) {
        $ans = [];
        $ost = 0;
        while (($l1 != null)|($l2 != null)){
            $temp = $l1->val + $l2->val+$ost;
            $ans[] = $temp%10;
            $ost = floor($temp/10);
            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        if ($ost==1){
            $ans[]=1;
        }
        $n = count($ans)-1;
        $cur = new ListNode();
        $cur -> val =$ans[$n];
        $n--;
        while ($n>=0){
            $temp = new ListNode();

            $temp -> next = $cur;
            $temp -> val = $ans[$n];
            $cur = $temp;
            $n--;
        }
        return $cur;
       
    }
}
