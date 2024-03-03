package com.acme.financial;

public class Checking extends Account {
	public Checking(int number, long initialBalance) {
		super(number, initialBalance);
	}

	public long withdraw(long amt) {
		if (balance > amt) {
			return balance -= amt;
		}
		return 0;
	}

}
