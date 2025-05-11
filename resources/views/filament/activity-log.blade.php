<div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">

    <div class="py-3 px-4 bg-gray-100 border-b dark:bg-gray-700 dark:border-gray-600">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-200">@lang('Record') {{ $record->id }}
    </div>

    <table class="w-full">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th
                    class="py-3 px-4 text-xs font-medium tracking-wider text-left uppercase bg-gray-100 dark:bg-gray-700">
                    @lang('Date')
                </th>
                <th
                    class="py-3 px-4 text-xs font-medium tracking-wider text-left uppercase bg-gray-100 dark:bg-gray-700">
                    @lang('Action')
                </th>
                <th
                    class="py-3 px-4 text-xs font-medium tracking-wider text-left uppercase bg-gray-100 dark:bg-gray-700">
                    @lang('Description')
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @forelse($record->logs as $log)
                <tr class="transition-colors dark:hover:bg-gray-700">

                    <td class="py-3 px-4 text-sm text-gray-500 dark:text-gray-400">
                        {{ $log->created_at->format('Y-m-d H:i A') }}
                    </td>
                    <td class="py-3 px-4">
                        <span
                            class="inline-flex items-center py-0.5 px-2.5 text-xs font-medium text-gray-800 bg-gray-100 rounded-full dark:text-gray-300 dark:bg-gray-700">
                            {{ \App\Enums\ActivityLogAction::options()[$log->action] }}
                        </span>
                    </td>
                    <td class="py-3 px-4 text-sm text-gray-900 dark:text-gray-200">
                        {!! $log->description !!}
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4" class="py-3 px-4 text-center text-gray-500 dark:text-gray-400">
                        @lang("No logs found")
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>