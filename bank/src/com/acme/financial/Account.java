package com.acme.financial;

public abstract class Account {

	private int number;
	protected long balance;

	public Account(int number, long balance) {
		this.number = number;
		this.balance = balance;
	}

	public long getBalance() {
		return balance;
	}

	public int getAccountNumber() {
		return number;
	}

	public void deposit(long amt) {
		this.balance += amt;
	}

}