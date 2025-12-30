<?php

namespace Ht3aa\StatusTabs;

use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class StatusTabs extends ListRecords
{

    public function getTabs(): array
    {
        $tabs = [
            'all' => Tab::make('الكل'),
        ];
        // get status column from the model
        $statusEnumClass = $this->getModel()::select('status')->first()->getCasts('status')['status'];


        foreach ($statusEnumClass::cases() as $status) {
            $tabs[$status->value] = Tab::make($status->getLabel())
                ->modifyQueryUsing(function (Builder $query) use ($status) {
                    return $query->where('status', $status->value);
                })
                ->icon($status->getIcon())
                ->badge($this->getModel()::where('status', $status->value)->count());
        }

        return $tabs;
    }
}
