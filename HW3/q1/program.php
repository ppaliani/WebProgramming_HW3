<html>
    <body>
       <?php
            function factors($number) {
                if ($number <= 0) {
                    return "Invalid input. Please provide a positive integer.";
                }
                $factors = array();
                for ($i = 1; $i <= $number; $i++) {
                    if ($number % $i == 0) {
                        $factors[] = $i;
                    }
                }
                return implode(', ', $factors);
            }


            function tax($income, $status) {
                if (!is_numeric($income) || $income <= 0) {
                    return "Invalid income. Please provide a positive number.";
                }

                $status = strtolower($status); // Convert marital status to lowercase for case-insensitivity.

                if ($status !== 'single' && $status !== 'married') {
                    return "Invalid marital status. Please provide 'single' or 'married'.";
                }

                if ($status === 'single') {
                    if ($income < 30000) {
                        $taxRate = 0.20;
                    } else {
                        $taxRate = 0.25;
                    }
                } else {
                    // Married
                    if ($income < 50000) {
                        $taxRate = 0.10;
                    } else {
                        $taxRate = 0.15;
                    }
                }
                $taxAmount = $income * $taxRate;
                return $taxAmount;
            }

            function stdDev($numbers) {
                $n = count($numbers);
                
                if ($n < 2) {
                    return 0;
                }
                
                $sum = array_sum($numbers);
                $mean = $sum / $n;
                
                $sumSquaredDifferences = 0;
                foreach ($numbers as $number) {
                    $sumSquaredDifferences += pow($number - $mean, 2);
                }
                
                $variance = $sumSquaredDifferences / $n;
                $standardDeviation = sqrt($variance);
                
                return $standardDeviation;
            }

            function compoundInterest($p, $r, $n) {
                if ($p <= 0 || $r < 0 || $n <= 0 || $r > 100) {
                    return "Invalid input. Please provide positive values for 'p' and 'n', and an interest rate between 0 and 100.";
                }

                $finalAmount = $p * pow((1 + $r / 100), $n);
                return $finalAmount;
            }

            function createIdPassword($firstName, $lastName) {
                $firstName = strtoupper($firstName);
                $lastName = strtoupper($lastName);

                $id = substr($firstName, 0, 1) . $lastName;
                $password = substr($firstName, 0, 1) . substr($firstName, -1) . substr($lastName, 0, 3) . strlen($firstName) . strlen($lastName);

                return array(
                    'id' => $id,
                    'password' => $password
                );
            }

            function removeDuplicates($inputArray) {
                $uniqueArray = array();
                
                foreach ($inputArray as $value) {
                    $uniqueArray[$value] = $value;
                }
                
                $resultArray = array_values($uniqueArray);
                
                return $resultArray;
            }

            class Student {
                private $name;
                private $gpa;

                public function __construct($name, $gpa) {
                    $this->name = $name;
                    $this->gpa = $gpa;
                }

                public function getName() {
                    return $this->name;
                }

                public function getGpa() {
                    return $this->gpa;
                }

                public function setName($name) {
                    $this->name = $name;
                }

                public function setGpa($gpa) {
                    $this->gpa = $gpa;
                }

                public function isHonors() {
                    return $this->gpa > 3;
                }
            }

            function isUniversityId($str) {
                // University ID regular expression pattern
                $pattern = '/^E-0\d{2}[a-z]{2}-9[a-z]{2}\d{2}$/';

                return preg_match($pattern, $str) === 1;
            }

            function isPhoneNumber($str) {
                // Phone number regular expression pattern
                $pattern = '/^(313|248|734)-\d{3}-\d{4}$/';

                return preg_match($pattern, $str) === 1;
            }
       ?>
    </body>
</html>