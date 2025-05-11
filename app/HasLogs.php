<?php

namespace App;

use App\Enums\ActivityLogAction;
use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasLogs
{
    public function logs(): MorphMany
    {
        return $this->morphMany(ActivityLog::class, 'loggable')->orderBy('created_at', 'desc');
    }

    /**
     * Generate a log entry for the current model.
     *
     *
     * @example
     *      $user->log(ActivityLogAction::CREATED, 'Account created by admin');
     */
    public function log(ActivityLogAction $action, string $description): void
    {
        $this->logs()->create([
            'user_id' => auth()->id(),
            'action' => $action,
            'description' => $description,
        ]);
    }
}
