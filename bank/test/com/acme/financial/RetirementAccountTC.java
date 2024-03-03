package com.acme.financial;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

class RetirementAccountTC {

	@Test
	void testAccountConstruction() throws Exception {
		Account a1 = new RetirementAccount(123, 1000);
		
		assertNotNull(a1, "failed to create bank account");
		
		assertEquals(123, a1.getAccountNumber());
		assertEquals(1000, a1.getBalance());
	}
	
	@Test
	void testDeposit() throws Exception {
		Account a1 = new RetirementAccount(123, 1000);
		
		a1.deposit(10);
		assertEquals(1010, a1.getBalance());
		
		
	}

}
