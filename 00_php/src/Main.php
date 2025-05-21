<?php

declare(strict_types=1);

namespace Basics;

class Main
{
    private const MAX_ITEMS = 5;

    public static function execute(): void
    {
        // Basic data types
        $number = 42;
        $text = "Hello";
        $isValid = true;
        $decimal = 3.14;

        echo sprintf("Number: %d\n", $number);
        echo sprintf("Text: %s\n", $text);
        echo sprintf("Is valid: %s\n", $isValid ? "Yes" : "No");
        echo sprintf("Decimal: %f\n", $decimal);

        // Array manipulation
        $items = [];
        for ($i = 0; $i < self::MAX_ITEMS; $i++) {
            $items[] = $i * 2;
        }

        try {
            if (empty($items)) {
                throw new \Exception("Items array is empty");
            }

            // Process items
            foreach ($items as $item) {
                echo sprintf("%d\n", $item);
            }
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

//Main::execute();