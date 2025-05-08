class Solution:
    def twoSum(self, nums: List[int], target: int) -> List[int]:
        
        cnums = nums.copy()
        ob = 0
        if target < 0:
            target = (-1)*target
            ob = 1
            for j in range(0,len(nums)):
                nums[j] = (-1)*nums[j]
        nums.sort()
        print(nums)
        ind =len(nums)-1
       
      
        while (ind>=0)and(nums[ind] > target):
            ind -= 1
        print (ind)
        i =0
        while nums[i]+nums[ind] != target:
            print(nums[i]+nums[ind])
            print(nums[i]+nums[ind] != target)
            i+=1
            while nums[i]+nums[ind]>target:
                ind -= 1
                i-=1
        print(i,ind)
        print(nums)
        print(cnums)
        if ob == 1:
            for j in range(0,len(nums)):
                nums[j] = (-1)*nums[j]
        an1 = cnums.index(nums[i])
        if nums[i] == nums[ind]:
            an2 = cnums[an1+1:].index(nums[ind])+1+an1
        else:
            an2 = cnums.index(nums[ind])
        return [an1,an2]
        
