<?php

namespace App\Integration\SystemTools;

use App\Integration\IntegrationInterface;
use App\Integration\ToolDefinition;
use App\Integration\CredentialField;

class IssueReportingIntegration implements IntegrationInterface
{
    public function getType(): string
    {
        return 'system.report_issue_tool';
    }

    public function getName(): string
    {
        return 'Issue Reporting';
    }

    public function getTools(): array
    {
        return [
            new ToolDefinition(
                'report_issue_tool',
                'Use this tool to report issues or problems encountered by the user.',
                []  // No parameters required based on screenshot
            )
        ];
    }

    public function executeTool(string $toolName, array $parameters, ?array $credentials = null): array
    {
        if ($toolName !== 'report_issue_tool') {
            throw new \InvalidArgumentException("Unknown tool: $toolName");
        }

        // Stub implementation - no actual logic
        return [
            'success' => true,
            'message' => 'Tool execution simulated - report_issue_tool'
        ];
    }

    public function requiresCredentials(): bool
    {
        return false; // System tools don't require external service credentials
    }

    public function validateCredentials(array $credentials): bool
    {
        return true; // No external credentials needed
    }

    public function getCredentialFields(): array
    {
        return []; // System tools don't need credential fields
    }
}
