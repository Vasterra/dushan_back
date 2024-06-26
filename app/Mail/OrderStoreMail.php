<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderStoreMail extends Mailable implements ShouldQueue
{
	use Queueable, SerializesModels;

	public string $stops;

	/**
	 * Create a new message instance.
	 */
	public function __construct(public Order $order)
	{
		$stops = $order->stops()->get()?->map(function ($stop) {
			return $stop->locationStop?->name;
		})->toArray();

		if (count($stops)) {
			$this->stops = implode(',', $stops) ?? '';
		} else {
			$this->stops = '';
		}
	}

	/**
	 * Get the message envelope.
	 */
	public function envelope(): Envelope
	{
		return new Envelope(
			subject: 'Order Store Mail',
		);
	}

	/**
	 * Get the message content definition.
	 */
	public function content(): Content
	{
		return new Content(
			markdown: 'orders.store',
		);
	}

	/**
	 * Get the attachments for the message.
	 *
	 * @return array<int, \Illuminate\Mail\Mailables\Attachment>
	 */
	public function attachments(): array
	{
		return [];
	}
}
