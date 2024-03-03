package com.acme.financial;

import static org.junit.jupiter.api.Assertions.*;

import java.util.Random;

import org.junit.jupiter.api.Test;

class BankAccountTC {

	@Test
	void testAccountConstruction() throws Exception {
		Account a1 = new Checking(123, 1000);

		assertNotNull(a1, "failed to create bank account");

		assertEquals(123, a1.getAccountNumber());
		assertEquals(1000, a1.getBalance());
	}

	@Test
	void testDeposit() throws Exception {
		Account a1 = new Checking(123, 1000);

		a1.deposit(10);
		assertEquals(1010, a1.getBalance());

	}

	@Test
	void testWithdrawl() throws Exception {
		Checking a1 = new Checking(123, 1000);
		a1.withdraw(100);
		assertEquals(900, a1.getBalance());

	}

	@Test
	void testOverdraft() throws Exception {
		Checking a1 = new Checking(123, 1000);
		a1.withdraw(1001);
		assertEquals(1000, a1.getBalance());
	}

	@Test
	void testSomething() throws Exception {
		Random rand = new Random();
		int accountNumber = rand.nextInt(2000);
		Checking c1 = new Checking(accountNumber, 1000);
		assertEquals(c1.getAccountNumber(), accountNumber);
	}

}
