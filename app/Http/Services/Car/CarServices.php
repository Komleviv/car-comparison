<?php


namespace App\Http\Services\Car;

use App\Http\Services\Api\ApiServices;
use App\Models\CarMark;

class CarServices
{
    public function getCarMarkModel()
    {
        $markModelArray = ApiServices::getMarkModels();

        if (!$markModelArray)
        {
            return redirect()->route('cars.index')
                ->with('error','Не удалось получить данные');
        }

        $message = 'Марки и модели получены успешно<br/>';

        $markCreateCount = $this->setMark($markModelArray);

        if ($markCreateCount > 0) {
            $message .= 'Добавлено ' . $markCreateCount . ' марок';
        }

        return redirect()->route('cars.index')
            ->with('message', $message);
    }

    private function setMark(array $marks): int|null
    {
        $markCreateCount = 0;

        foreach ($marks as $mark)
        {
            $output['mark_id'] = $mark['id'];
            $output['mark_name'] = $mark['name'];
            $output['mark_cyrillic_name'] = $mark['cyrillic-name'];
            $output['mark_popular'] = $mark['popular'] ?? null;
            $output['mark_concern'] = $mark['concern'] ?? null;
            $output['mark_class'] = $mark['class'] ?? null;
            $output['mark_country'] = $mark['country'] ?? null;

            $markModel = CarMark::firstOrCreate(['mark_name' => $mark['name']], $output);

            if($markModel->wasRecentlyCreated === true)
                $markCreateCount++;
        }

        return $markCreateCount;
    }
}
