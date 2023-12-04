<?php 
    namespace Duan1\Nhom6\Models;

    use Duan1\Nhom6\Model;

    // Tạo đối class feature 
    class MomoWallet extends Model {
        // Tạo biến $table để lưu tên bảng
        protected $table = 'momo';

        // Tạo array $columns đề lưu các cột trong bảng
        protected $columns = [
            'partnerCode',
            'orderId',
            'requestId',
            'amount',
            'orderInfo',
            'orderType',
            'transId',
            'payType',
            'signature',
        ];

        public function findBill($partnerCode) {
            $sql = "SELECT * FROM momo WHERE partnerCode = '$partnerCode'";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            $stmt->setFetchMode(\PDO::FETCH_ASSOC);

            return $stmt->fetch();
        }
    }
?>