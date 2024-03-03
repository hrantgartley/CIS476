package com.acme.financial;

import org.junit.platform.suite.api.SelectClasses;
import org.junit.platform.suite.api.Suite;

@Suite
@SelectClasses({ BankAccountTC.class, RetirementAccountTC.class })
public class AllTests {

}