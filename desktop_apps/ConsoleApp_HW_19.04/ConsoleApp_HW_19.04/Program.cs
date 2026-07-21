public class Prog
{
    public static void Main()
    {
        //int[] numbers = { 1, 2, 2, 3, 1, 2 };
        int[] numbers = {1, 2, 2, 3, 1, 2, 1, 2, 2, 3, 1, 2 , 1, 2, 2, 3, 1, 2 , 1, 2, 2, 3, 1, 2};
        int[] used_nums = new int[3];
        int[] nums_count=new int[3];
        int num_counter = 0;
        foreach (int num in numbers)
        {
            if (!used_nums.Contains(num))
            {
                used_nums[num_counter] = num;
                nums_count[num_counter] = 1;
                num_counter++;
            }
            else {
                for (int i=0;i<num_counter;i++)
                {
                    if (used_nums[i]==num)
                    {
                        nums_count[i] += 1;
                    }
                }
            }
        }
        for (int i = 0; i < 3;i++){
            Console.WriteLine($"{used_nums[i]}-> {nums_count[i]} razy");
        }
    }
}

