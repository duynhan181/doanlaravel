<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = [
            [
                'content' => 'Trong các số sau, số nào là số thập phân?',
                'a' => '0.6',
                'b'=>'0.987',
                'c'=>'35.7',
                'd'=> 'Tất cả các đáp án đều đúng',
                'answer'=>'Tất cả các đáp án đều đúng',
                'field_id'=>'1',
            ],

            [
                'content' => 'Số thập phân 2,008 đọc là:',
                'a' => 'Hai phẩy tám',
                'b'=>'Hai phẩy không không tám',
                'c'=>'Hai phẩy không tám',
                'd'=> 'Hai phẩy không không không tám',
                'answer'=>'Hai phẩy không không tám',
                'field_id'=>'1',
            ],

            [
                'content' => 'Tác phẩm nào viết theo khuynh hướng sử thi và cảm hứng lãng mạn cách mạng?',
                'a' => 'Đất nước (Nguyễn Khoa Điềm)',
                'b'=>'Sóng (Xuân Quỳnh)',
                'c'=>'Đò Lèn (Nguyễn Duy)',
                'd'=> 'Đàn ghi ta của Lor-ca (Thanh Thảo)',
                'answer'=>'Đất nước (Nguyễn Khoa Điềm)',
                'field_id'=>'2',
            ],

            [
                'content' => 'Tác phẩm nào sau đây không phải là văn nghị luận?',
                'a' => 'Tuyên ngôn Độc lập',
                'b'=>'Thương tiếc nhà văn Nguyên Hồng',
                'c'=>'Ai đã đặt tên cho dòng sông?',
                'd'=> 'Mấy ý nghĩ về thơ',
                'answer'=>'Ai đã đặt tên cho dòng sông?',
                'field_id'=>'2',
            ],

            [
                'content' => 'Ý nào sau đây không phải là đặc điểm chung của nhóm các nước kinh tế phát triển?',
                'a' => 'Đầu tư nước ngoài lớn.',
                'b'=>'Ngành dịch vụ chiếm tỉ trọng lớn.',
                'c'=>'Chỉ số phát triển con người (HDI) cao.',
                'd'=> 'Thu nhập bình quân đầu người không cao.',
                'answer'=>'Thu nhập bình quân đầu người không cao.',
                'field_id'=>'3',
            ],
        ];

        foreach($question as $key => $value){
            Question::create($value);
        }
    }
}
